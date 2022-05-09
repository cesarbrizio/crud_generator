<?php

namespace App\Models;
use DateTime;
use Carbon\Carbon;


use Illuminate\Database\Eloquent\Model;

class AppModel extends Model
{

    public static function verifyDate($date, $strict = true)
    {
        $dateTime = DateTime::createFromFormat('d/m/Y H:i', $date);
        $errors = DateTime::getLastErrors();
        if (!empty($errors['warning_count'])) {
            return false;
        }
        return $dateTime !== false;
    }

    /**
     * Handles react-select info to array of params
     */
    public static function handleSelectResults ($data) {
        $handled_array = [];
        foreach ($data as $d) {
            $handled_array[] = $d['value'];
        }

        return $handled_array;
    }

    /**
     * Handles eloquent collection for react selects
     * @param  collection $data data to be handled
     * @param  string $label label for select
     * @param  string $value value for select
     * @return array  fromated array for react select
     */
    public static function handleSelect ($data, $label = 'name', $value = 'id', $add_value = null, $position_value = 'beginning') {
        $handled_array = [];
        foreach ($data as $d) {
            if (@$d->$label && @$d->$value) {
                $handled_array[] = [
                    'value' => $d->$value,
                    'label' => $d->$label,
                ];
            }
        }

        if ($add_value) {
            $data_prov = [];
            if ($position_value == 'beginning') {
                $data_prov[] = [
                    'value' => $add_value,
                    'label' => $add_value,
                ];
            }
            foreach ($handled_array as $ha) {
                $data_prov[] = $ha;
            }
            if ($position_value != 'beginning') {
                $data_prov[] = [
                    'value' => $add_value,
                    'label' => $add_value,
                ];
            }
            $handled_array = $data_prov;
        }
        return $handled_array;
    }

    /**
     * @return array with months
     */
    public static function getMonths ($key = null) {
        $months = [
            '1' => 'Janeiro',
            '2' => 'Fevereiro',
            '3' => 'Março',
            '4' => 'Abril',
            '5' => 'Maio',
            '6' => 'Junho',
            '7' => 'Julho',
            '8' => 'Agosto',
            '9' => 'Setembro',
            '10' => 'Outubro',
            '11' => 'Novembro',
            '12' => 'Dezembro'
        ];
        return $months[$key];
    }

    /**
     * Altera uma data para outro formato
     *
     * @param string $date String contendo a data a ser formatada
     * @param string $outputFormat Formato de saida
     * @throws Exception Quando não puder converter a data
     * @return string Data formatada
     * @author Hugo Ferreira da Silva
     */
    public static function parseDate($date, $outputFormat = 'd/m/Y') {
        $formats = array(
            'm/Y',
            'd/m/Y',
            'd/m/Y H',
            'd/m/Y H:i',
            'd/m/Y H:i:s',
            'Y-m-d',
            'Y-m-d H',
            'Y-m-d H:i',
            'Y-m-d H:i:s',
        );

        foreach($formats as $format){

            if(!is_object($date)) {
                $dateObj = DateTime::createFromFormat($format, $date);
            } else {
                $dateObj = $date;
            }
            if($dateObj !== false){
                break;
            }
        }

        if($dateObj === false){
            return null;
        }
        return $dateObj->format($outputFormat);
    }

    public static function generateRandomString($length = 10)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function generateRandomHexadecimal()
    {
        $characters = '0123456789ABCDEF';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 6; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $randomString = '#' . $randomString;
        return $randomString;
    }

    public static function handleNRequestNull($data) {
        foreach ($data as $key => $d) {
            if ($d === 'null') {
                $data[$key] = NULL;
            }
        }

        return $data;
    }
    
    //Método para calcular distancia entre dois locais diferentes via API Google
    public static function getDistance($address, $destination) {
      $address =  str_replace(" ", "+", $address);
      $destination =  str_replace(" ", "+", $destination);
      $url_staff = 'https://maps.google.com/maps/api/geocode/json?key=AIzaSyBj6shPLXB8ibNf1h4tb_4-QEZQKP-brjY&address=' . $address;
      $staff_json = file_get_contents($url_staff);
      $staff_resp = json_decode($staff_json, true);
      $url_destination = 'https://maps.google.com/maps/api/geocode/json?key=AIzaSyBj6shPLXB8ibNf1h4tb_4-QEZQKP-brjY&address=' . $destination;
      $destination_json = file_get_contents($url_destination);
      $destination_resp = json_decode($destination_json, true);

      if ($staff_resp['status']=='OK' && $destination_resp['status']=='OK') {
          $staff_lati = $staff_resp['results'][0]['geometry']['location']['lat'];
          $staff_longi = $staff_resp['results'][0]['geometry']['location']['lng'];
          $destination_lati = $destination_resp['results'][0]['geometry']['location']['lat'];
          $destination_longi = $destination_resp['results'][0]['geometry']['location']['lng'];
          $distance = ceil(AppModel::haversineGreatCircleDistance($staff_lati, $staff_longi, $destination_lati, $destination_longi, $earthRadius = 6371));
          return ($distance);
      } else {
          return 0;
      }
    }

    public static function haversineGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6378) {
        // convert from degrees to radians
      $latFrom = deg2rad($latitudeFrom);
      $lonFrom = deg2rad($longitudeFrom);
      $latTo = deg2rad($latitudeTo);
      $lonTo = deg2rad($longitudeTo);
      $latDelta = $latTo - $latFrom;
      $lonDelta = $lonTo - $lonFrom;
      $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
      cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
      return $angle * $earthRadius;
    }

}
