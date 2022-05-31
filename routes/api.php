<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// AbnormalOccurrenceTypes
Route::get('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'index']);
Route::get('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'show']);
Route::post('/abnormal_occurrence_types', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'store']);
Route::put('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'update']);
Route::delete('/abnormal_occurrence_types/{abnormalOccurrenceType}', [App\Http\Controllers\AbnormalOccurrenceTypesController::class, 'destroy']);

// AircraftLogbookVolumeLegDiscrepancies
Route::get('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_discrepancies', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_discrepancies/{aircraftLogbookVolumeLegDiscrepancy}', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'options']);
Route::get('/aircraft_logbook_volume_leg_discrepancies/status/options/', [App\Http\Controllers\AircraftLogbookVolumeLegDiscrepanciesController::class, 'status_options']);

// AircraftLogbookVolumeLegOccurrenceStaffs
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrence_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrence_staffs/{aircraftLogbookVolumeLegOccurrenceStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrence_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrenceStaffsController::class, 'options']);

// AircraftLogbookVolumeLegOccurrences
Route::get('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_occurrences', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_occurrences/{aircraftLogbookVolumeLegOccurrence}', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_occurrences/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegOccurrencesController::class, 'options']);

// AircraftLogbookVolumeLegStaffs
Route::get('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'index']);
Route::get('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'show']);
Route::post('/aircraft_logbook_volume_leg_staffs', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'store']);
Route::put('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_leg_staffs/{aircraftLogbookVolumeLegStaff}', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_leg_staffs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegStaffsController::class, 'options']);

// AircraftLogbookVolumeLegs
Route::get('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'index']);
Route::get('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'show']);
Route::post('/aircraft_logbook_volume_legs', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'store']);
Route::put('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'update']);
Route::delete('/aircraft_logbook_volume_legs/{aircraftLogbookVolumeLeg}', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'destroy']);
Route::get('/aircraft_logbook_volume_legs/related/options', [App\Http\Controllers\AircraftLogbookVolumeLegsController::class, 'options']);

// AircraftLogbookVolumes
Route::get('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'index']);
Route::get('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'show']);
Route::post('/aircraft_logbook_volumes', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'store']);
Route::put('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'update']);
Route::delete('/aircraft_logbook_volumes/{aircraftLogbookVolume}', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'destroy']);
Route::get('/aircraft_logbook_volumes/related/options', [App\Http\Controllers\AircraftLogbookVolumesController::class, 'options']);

// AircraftLogbooks
Route::get('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'index']);
Route::get('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'show']);
Route::post('/aircraft_logbooks', [App\Http\Controllers\AircraftLogbooksController::class, 'store']);
Route::put('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'update']);
Route::delete('/aircraft_logbooks/{aircraftLogbook}', [App\Http\Controllers\AircraftLogbooksController::class, 'destroy']);
Route::get('/aircraft_logbooks/related/options', [App\Http\Controllers\AircraftLogbooksController::class, 'options']);

// Aircrafts
Route::get('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'index']);
Route::get('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'show']);
Route::post('/aircrafts', [App\Http\Controllers\AircraftsController::class, 'store']);
Route::put('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'update']);
Route::delete('/aircrafts/{aircraft}', [App\Http\Controllers\AircraftsController::class, 'destroy']);

// Duties
Route::get('/duties', [App\Http\Controllers\DutiesController::class, 'index']);
Route::get('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'show']);
Route::post('/duties', [App\Http\Controllers\DutiesController::class, 'store']);
Route::put('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'update']);
Route::delete('/duties/{duty}', [App\Http\Controllers\DutiesController::class, 'destroy']);

// FlightTypes
Route::get('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'index']);
Route::get('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'show']);
Route::post('/flight_types', [App\Http\Controllers\FlightTypesController::class, 'store']);
Route::put('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'update']);
Route::delete('/flight_types/{flightType}', [App\Http\Controllers\FlightTypesController::class, 'destroy']);

// FuelUnities
Route::get('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'index']);
Route::get('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'show']);
Route::post('/fuel_unities', [App\Http\Controllers\FuelUnitiesController::class, 'store']);
Route::put('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'update']);
Route::delete('/fuel_unities/{fuelUnity}', [App\Http\Controllers\FuelUnitiesController::class, 'destroy']);

// LocationTypes
Route::get('/location_types', [App\Http\Controllers\LocationTypesController::class, 'index']);
Route::get('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'show']);
Route::post('/location_types', [App\Http\Controllers\LocationTypesController::class, 'store']);
Route::put('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'update']);
Route::delete('/location_types/{locationType}', [App\Http\Controllers\LocationTypesController::class, 'destroy']);

// Locations
Route::get('/locations', [App\Http\Controllers\LocationsController::class, 'index']);
Route::get('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'show']);
Route::post('/locations', [App\Http\Controllers\LocationsController::class, 'store']);
Route::put('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'update']);
Route::delete('/locations/{location}', [App\Http\Controllers\LocationsController::class, 'destroy']);
Route::get('/locations/related/options', [App\Http\Controllers\LocationsController::class, 'options']);

// OperatorResponsibles
Route::get('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'index']);
Route::get('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'show']);
Route::post('/operator_responsibles', [App\Http\Controllers\OperatorResponsiblesController::class, 'store']);
Route::put('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'update']);
Route::delete('/operator_responsibles/{operatorResponsible}', [App\Http\Controllers\OperatorResponsiblesController::class, 'destroy']);
Route::get('/operator_responsibles/related/options', [App\Http\Controllers\OperatorResponsiblesController::class, 'options']);

// Operators
Route::get('/operators', [App\Http\Controllers\OperatorsController::class, 'index']);
Route::get('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'show']);
Route::post('/operators', [App\Http\Controllers\OperatorsController::class, 'store']);
Route::put('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'update']);
Route::delete('/operators/{operator}', [App\Http\Controllers\OperatorsController::class, 'destroy']);

// Staff
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'show']);
Route::post('/staff', [App\Http\Controllers\StaffController::class, 'store']);
Route::put('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'update']);
Route::delete('/staff/{staff}', [App\Http\Controllers\StaffController::class, 'destroy']);

// Staffs
Route::get('/staffs', [App\Http\Controllers\StaffsController::class, 'index']);
Route::get('/staffs/{staff}', [App\Http\Controllers\StaffsController::class, 'show']);
Route::post('/staffs', [App\Http\Controllers\StaffsController::class, 'store']);
Route::put('/staffs/{staff}', [App\Http\Controllers\StaffsController::class, 'update']);
Route::delete('/staffs/{staff}', [App\Http\Controllers\StaffsController::class, 'destroy']);
