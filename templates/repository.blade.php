namespace App\Repositories;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
      return $this->belongsTo(\App\Models\{{$related_table['model']}}::class, '{{$related_table['foreign_id']}}', 'id');
    }
@endif
@endforeach
@endif
@if(!empty($data['child_tables']))
@foreach($data['child_tables'] as $child_table)
@if($child_table['model_count'] == 1)

    public function {{$child_table['table']}} ()
    {
      return $this->hasMany(\App\Models\{{$child_table['model']}}::class, '{{$child_table['key']}}', 'id');
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

    public function {{ $field['name'] }}(): Attribute
    {
      if(!empty($value)) {
        $str = AppModel::parseDate($value, 'Y-m-d');
      }
      return new Attribute(
        set: fn ($value) => $str,
      );
    }

@elseif($field['type'] == 'datetime')

    public function {{ $field['name'] }}(): Attribute
    {
      if(!empty($value)) {
        $str = AppModel::parseDate($value, 'Y-m-d H:i:s');
      }
      return new Attribute(
        set: fn ($value) => $str,
      );
    }

@endif
@if($field['name'] == 'active')

    public function getActiveStrAttribute($value)
    {
      if(isset($this->attributes['active'])) {
        if ($this->attributes['active'] == 0) {
          return 'Archived';
        }
        if ($this->attributes['active'] == 1) {
          return 'Active';
        }
      }
    }
@endif
@if($field['name'] == 'status')
    
    public function getStatusStrAttribute($value)
    {
      if(isset($this->attributes['status'])) {
        return ucwords($this->attributes['status']);
      }
    }
@endif
@endforeach

    protected $appends = [{!! htmlspecialchars_decode($data['appends']) !!}];

}