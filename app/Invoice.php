<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invoices';

    protected $appends = array('ref');

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date', 'description', 'job_id', 'estimate_id', 'house', 'street', 'town', 'county', 'postcode', 'items', 'materials', 'items_price', 'materials_price'];

    public function getRefAttribute()
    {
        return str_pad($this->id, 6,0, STR_PAD_LEFT);
    }

}
