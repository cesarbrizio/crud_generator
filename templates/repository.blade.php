namespace App\Repositories;

use App\Models\AppModel;

class {{ $data['pascal_singular'] }}Repository extends AppModel
{
      /*
    * Relationships
    */
@if(!empty($data['related_tables']))
@foreach($data['related_tables'] as $related_table)
@if($related_table['model_count'] == 1)
    public function {{$related_table['relationship_name']}} ()
    {
      return $this->belongsTo(\App\Models\{{$related_table['model']}}::class);
    }
@endif
@endforeach
@endif
@if(!empty($data['child_tables']))
@foreach($data['child_tables'] as $child_table)
@if($child_table['model_count'] == 1)
    public function {{$child_table['table']}} ()
    {
      return $this->hasMany(\App\Models\{{$child_table['model']}}::class);
    }
@endif
@endforeach
@endif
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
      'id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
      ''
    ];

    /*
    * Callbacks, Mutatos e Accessors
    */
@foreach($data['fields'] as $field)
@if($field['type'] == 'date')

    public function set{{ $field['pascal'] }}Attribute($value)
    {
      if(!empty($value)) {
        return $this->attributes['{{ $field['name']  }}'] = AppModel::parseDate($value, 'Y-m-d');
      }
    }

    public function get{{ $field['pascal'] }}StrAttribute($value)
    {
      if(!empty($this->attributes['{{ $field['name'] }}'])) {
        return AppModel::parseDate($this->attributes['{{ $field['name']  }}'], 'd/m/Y');
      }
    }
@elseif($field['type'] == 'datetime')

    public function set{{ $field['pascal'] }}Attribute($value)
    {
      if(!empty($value)) {
        return $this->attributes['{{ $field['name']  }}'] = AppModel::parseDate($value, 'Y-m-d H:i:s');
      }
    }

    public function get{{ $field['pascal'] }}StrAttribute($value)
    {
      if(!empty($this->attributes['{{ $field['name'] }}'])) {
        return AppModel::parseDate($this->attributes['{{ $field['name']  }}'], 'd/m/Y H:i');
      }
    }
@endif
@if($field['name'] == 'active')

    public function getActiveStrAttribute($value)
    {
      if(isset($this->attributes['active'])) {
        if ($this->attributes['active'] == 0) {
          return 'Arquivado';
        }
        if ($this->attributes['active'] == 1) {
          return 'Ativo';
        }
      }
    }
@endif
@if($field['name'] == 'status')
    
    public function getStatusStrAttribute($value)
    {
      if(isset($this->attributes['status'])) {
        if ($this->attributes['status'] == 0) {
          return 'Cancelado';
        }
        if ($this->attributes['status'] == 1) {
          return 'Rascunho';
        }
        if ($this->attributes['status'] == 2) {
          return 'Em Andamento';
        }
        if ($this->attributes['status'] == 3) {
          return 'Finalizado';
        }
      }
    }
@endif
@endforeach
    
    protected $appends = [{!! htmlspecialchars_decode($data['appends']) !!}];

}