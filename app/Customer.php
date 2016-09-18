<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customers';


    protected $appends = array('ref');

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'forename', 'surname', 'house', 'street', 'town', 'county', 'postcode', 'telephone', 'email'];

    /**
     * Jobs reated to this customer
     * @return Job Job object
     */
    public function jobs()
    {
        return $this->hasMany('App\Job');
    }

    public function estimates()
    {
        return $this->hasMany('App\Estimate');
    }

    public function invoices()
    {
        return $this->hasMany('App\Invoice');
    }

    public function getRefAttribute()
    {
        return str_pad($this->id, 6,0, STR_PAD_LEFT);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('surname' , 'LIKE' , "$search");
    }

}
