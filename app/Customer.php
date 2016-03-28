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

}
