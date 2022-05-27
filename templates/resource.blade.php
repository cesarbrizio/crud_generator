namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
@if(!empty($data['child_tables']))
@foreach($data['child_tables'] as $childTable)
@if($childTable['model_count'] == 1)
use App\Http\Resources\{{ $childTable['model'] }}Resource;
@endif
@endforeach
@endif

class {{ $data['pascal_singular'] }}Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
@foreach($data['fields'] as $field)
            '{{$field['name']}}' => $this->{{$field['name']}},
@endforeach
@if(!empty($data['child_tables']))
@foreach($data['child_tables'] as $childTable)
@if($childTable['model_count'] == 1)
            '{{$childTable['table']}}' => {{ $childTable['model'] }}Resource::collection($this->whenLoaded('{{$childTable['table']}}')),
@endif
@endforeach
@endif
        ];
    }
}
