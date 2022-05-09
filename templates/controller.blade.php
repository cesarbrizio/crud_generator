namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{{ $data['pascal_singular'] }};

class {{ $data['pascal_plural'] }}Controller extends Controller
{
    
    public function index() {

@if(!empty($data['other_tables']))
      ${{ strtolower($data['singular']) }} = {{ $data['pascal_singular'] }}::with({!! htmlspecialchars_decode($data['other_tables_str']) !!})->get();
@else
      ${{ strtolower($data['singular']) }} = {{ $data['pascal_singular'] }}::get();
@endif
      if(empty(${{ strtolower($data['singular']) }})) {
        return response()->json(['data' => null, 'status' => 'error', 'message' => 'Não há nenhum registro para ser exibido.']); 
      }
      return response()->json(['data' => ${{ strtolower($data['singular']) }}, 'status' => 'success', 'message' => '']);

    }

    public function show($id) {

@if(!empty($data['other_tables']))
      ${{ strtolower($data['singular']) }} = {{ $data['pascal_singular'] }}::with({!! htmlspecialchars_decode($data['other_tables_str']) !!})->findOrFail($id);
@else
      ${{ strtolower($data['singular']) }} = {{ $data['pascal_singular'] }}::findOrFail($id);
@endif

      if(!isset(${{ strtolower($data['singular']) }})) {
        return response()->json(['data' => null, 'status' => 'error', 'message' => 'Registro não localizado.']); 
      }
      return response()->json(['data' => ${{ strtolower($data['singular']) }}, 'status' => 'success', 'message' => '']);

    }
    
    public function create(Request $request) {

      $validation = {{ $data['pascal_singular'] }}::{{ strtolower($data['singular']) }}_validation($request);

      $data = $request->all();

      ${{ strtolower($data['singular']) }} = new {{ $data['pascal_singular'] }};
@foreach($data['fields'] as $field)
@if($field['name'] == 'active')
      ${{ strtolower($data['singular']) }}->active = 1;
@elseif($field['name'] == 'status')
      ${{ strtolower($data['singular']) }}->status = 1;
@elseif($field['name'] !== 'created_at' && $field['name'] !== 'updated_at' && $field['name'] !== 'deleted_at')
      ${{ strtolower($data['singular']) }}->{{$field['name']}} = @$data['{{$field['name']}}'];
@endif
@endforeach

      if (${{ strtolower($data['singular']) }}->save()) {
        ${{ strtolower($data['singular']) }}->get();
        return response()->json(['data' => ${{ strtolower($data['singular']) }}, 'status' => 'success', 'message' => 'Registro adicionado com sucesso.']);
      }
      return response()->json(['data' => '', 'status' => 'error', 'message' => 'Não foi possível adicionar o registro, verifique os dados preenchidos.']);

    }
    
    public function update(Request $request) {

      $validation = {{ $data['pascal_singular'] }}::{{ strtolower($data['singular']) }}_validation($request);

      $data = $request->all();

      ${{ strtolower($data['singular']) }} = {{ $data['pascal_singular'] }}::findOrFail($data['id']);
      if(${{ strtolower($data['singular']) }}->fill($data)->save()) {
        return response()->json(['data' => ${{ strtolower($data['singular']) }}, 'status' => 'success', 'message' => 'Registro atualizado com sucesso.']);
      } else {
        return response()->json(['data' => null, 'status' => 'error', 'message' => 'Não foi possível atualizar o registro.']);
      }

    }
    
    public function destroy($id) {

        ${{ strtolower($data['singular']) }} = {{ $data['pascal_singular'] }}::findOrFail($id);

        if(${{ strtolower($data['singular']) }}->delete()) {
          return response()->json(['data' => ${{ strtolower($data['singular']) }}, 'status' => 'success', 'message' => 'Registro deletado com sucesso.']);
        }
        return response()->json(['data' => null, 'status' => 'error', 'message' => 'Não foi possível deletar o registro.']);

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
        'status' => 'success',
        'message' => 'Opções retornadas com sucesso.'
        ]);

    }
@endif

@foreach($data['fields'] as $field)
@if($field['type'] == 'enum')
    public function {{$field['name']}}_options () {

      ${{ strtolower($field['name']) }}_options = {{ $data['pascal_singular'] }}::get{{$field['pascal']}}Options();

      return response()->json([
        'data' => ${{ strtolower($field['name']) }}_options,
        'status' => 'success',
        'message' => 'Opções retornadas com sucesso.'
        ]);

    }
@endif
@endforeach

}
