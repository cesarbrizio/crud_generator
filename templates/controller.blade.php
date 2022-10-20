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

@if(str_contains($data['singular'], 'attachment') || str_contains($data['singular'], 'appendix'))
@foreach($data['related_tables'] as $related_table)
  public function index_by_{{$related_table['table']}}($id) {

    $publicationAttachment = PublicationAttachment::where('{{$related_table['foreign_id']}}', $id)->with('{{$related_table['relationship_name']}}')->get();

    return PublicationAttachmentResource::collection($publicationAttachment->loadMissing(['user', 'publication']));

  }

@endforeach
@endif
  public function show({{ $data['pascal_singular'] }} ${{ lcfirst($data['pascal_singular']) }}) {

    return new {{ $data['pascal_singular'] }}Resource(${{ lcfirst($data['pascal_singular']) }}->loadMissing([{!! htmlspecialchars_decode($data['other_tables_str']) !!}]));

  }

@if(str_contains($data['singular'], 'attachment') || str_contains($data['singular'], 'appendix'))
  public function store({{ $data['pascal_singular'] }}Request $request) {

    $validated = $request->validated();
    $data = $request->all();

    ${{ lcfirst($data['pascal_singular']) }} = new {{ $data['pascal_singular'] }};
@foreach($data['fields'] as $field)
@if(str_contains($field['name'], 'attachment') || str_contains($field['name'], 'appendix'))
    $file = $request->{{$field['name']}}->hashName();
    ${{ lcfirst($data['pascal_singular']) }}->{{$field['name']}} = $file;
@elseif($field['name'] !== 'created_at' && $field['name'] !== 'updated_at' && $field['name'] !== 'deleted_at')
    ${{ lcfirst($data['pascal_singular']) }}->{{$field['name']}} = @$data['{{$field['name']}}'];
@endif
@endforeach

    if (${{ lcfirst($data['pascal_singular']) }}->save()) {
      ${{ lcfirst($data['pascal_singular']) }}->get();
@foreach($data['fields'] as $field)
@if(str_contains($field['name'], 'attachment') || str_contains($field['name'], 'appendix'))
      move_uploaded_file($request->{{$field['name']}}->path(), config('app.cdn_path') . '/uploads/{{$data['singular_lower']}}_'. $file);
@endif
@endforeach
      return new {{ $data['pascal_singular'] }}Resource(${{ lcfirst($data['pascal_singular']) }});
    }

  }
@else
  public function store({{ $data['pascal_singular'] }}Request $request) {

    if (${{ lcfirst($data['pascal_singular']) }} = {{ $data['pascal_singular'] }}::create($request->validated()))
    {
      return new {{ $data['pascal_singular'] }}Resource(${{ lcfirst($data['pascal_singular']) }});
    }

  }
@endif

@if(!str_contains($data['singular'], 'attachment') && !str_contains($data['singular'], 'appendix'))
  public function update({{ $data['pascal_singular'] }}Request $request, {{ $data['pascal_singular'] }} ${{ lcfirst($data['pascal_singular']) }}) {

    if(${{ lcfirst($data['pascal_singular']) }}->update($request->validated())) {
      return new {{ $data['pascal_singular'] }}Resource(${{ lcfirst($data['pascal_singular']) }});
    }

  }
@endif

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
