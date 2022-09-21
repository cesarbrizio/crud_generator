namespace App\Http\Controllers;

use App\Http\Requests\{{ $data['pascal_singular'] }}Request;
use App\Http\Resources\{{ $data['pascal_singular'] }}Resource;
use App\Models\{{ $data['pascal_singular'] }};

class {{ $data['pascal_plural'] }}Controller extends Controller
{
    
    public function index() {

      ${{ lcfirst($data['pascal_singular']) }} = {{ $data['pascal_singular'] }}::all();

      return {{ $data['pascal_singular'] }}Resource::collection(${{ lcfirst($data['pascal_singular']) }}->loadMissing([{!! htmlspecialchars_decode($data['other_tables_str']) !!}]));
    }

    public function show({{ $data['pascal_singular'] }} ${{ lcfirst($data['pascal_singular']) }}) {

      return new {{ $data['pascal_singular'] }}Resource(${{ lcfirst($data['pascal_singular']) }}->loadMissing([{!! htmlspecialchars_decode($data['other_tables_str']) !!}]));
    }
    
    public function store({{ $data['pascal_singular'] }}Request $request) {

      if (${{ lcfirst($data['pascal_singular']) }} = {{ $data['pascal_singular'] }}::create($request->validated()))
      {
        return new {{ $data['pascal_singular'] }}Resource(${{ lcfirst($data['pascal_singular']) }});
      }
    }

    public function update({{ $data['pascal_singular'] }}Request $request, {{ $data['pascal_singular'] }} ${{ lcfirst($data['pascal_singular']) }}) {

      if(${{ lcfirst($data['pascal_singular']) }}->update($request->validated())) {
        return new {{ $data['pascal_singular'] }}Resource(${{ lcfirst($data['pascal_singular']) }});
      }
    }
    
    public function destroy({{ $data['pascal_singular'] }} ${{ lcfirst($data['pascal_singular']) }}) {

      if(${{ lcfirst($data['pascal_singular']) }}->delete()) {
        return new {{ $data['pascal_singular'] }}Resource(${{ lcfirst($data['pascal_singular']) }});
      }
    }

@if(!empty($data['related_tables']))
    public function options () {

@foreach($data['related_tables'] as $related_table)
@if($related_table['model_count'] == 1)
      ${{ strtolower($related_table['model']) }}_options = {{ $data['pascal_singular'] }}::get{{ $related_table['model'] }}Options();
@endif
@endforeach

      return response()->json([
@foreach($data['related_tables'] as $related_table)
@if($related_table['model_count'] == 1)
        '{{$related_table['table']}}_options' => ${{ strtolower($related_table['model']) }}_options,
@endif
@endforeach
        ]);

    }
@endif

@foreach($data['fields'] as $field)
@if($field['type'] == 'enum')
    public function {{$field['name']}}_options () {

      ${{ strtolower($field['name']) }}_options = {{ $data['pascal_singular'] }}::get{{$field['pascal']}}Options();

      return response()->json([
        'data' => ${{ strtolower($field['name']) }}_options,
        ]);

    }
@endif
@endforeach

}
