namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AppModel;
use App\Repositories\{{ $data['pascal_singular'] }}Repository;

class {{ $data['pascal_singular'] }} extends {{ $data['pascal_singular'] }}Repository
{
    /*
    * Functions
    */
@if(!empty($data['related_tables']))
@foreach($data['related_tables'] as $related_table)
@if($related_table['model_count'] == 1)
    public static function get{{ $related_table['model'] }}Options () {
      $data = \App\Models\{{ $related_table['model'] }}::select('id', 'name')->get();
      return $data->toArray();
    }
@endif
@endforeach
@endif

@foreach($data['fields'] as $field)
@if($field['type'] == 'enum')
    public static function get{{$field['pascal']}}Options () {
      $data = [];
@foreach($field['options'] as $option)
      $data[] = ['value' => '{{$option['value']}}', 'label' => '{{$option['label']}}'];
@endforeach
      return $data;
    }
@endif
@endforeach

}