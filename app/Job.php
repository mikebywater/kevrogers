<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jobs';

    protected $appends = array('ref');

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date', 'description', 'customer_id', 'house', 'street', 'town', 'county', 'postcode', 'items', 'materials' , 'status'];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function getRefAttribute()
    {
        return str_pad($this->id, 6,0, STR_PAD_LEFT);
    }

}
