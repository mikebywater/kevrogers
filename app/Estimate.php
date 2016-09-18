<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estimates';

    protected $appends = array('ref');

    public function job()
    {
        return $this->belongsTo('App\Job');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date', 'description', 'job_id', 'house', 'street', 'town', 'county', 'postcode', 'items', 'materials', 'items_price', 'materials_price'];

    public function getRefAttribute()
    {
        return str_pad($this->id, 6,0, STR_PAD_LEFT);
    }

}
