namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class {{ $data['pascal_singular'] }}Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
@foreach($data['fields'] as $field)
@if(!empty($field['validations']))
            '{{$field['name']}}' => '{{$field['validations']}}',
@endif
@endforeach
        ];
    }
}
