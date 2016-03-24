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

}
