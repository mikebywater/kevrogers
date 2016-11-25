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

    protected $appends = array('ref' , 'totalLabourPrice' , 'totalPrice' , 'totalMaterialsPrice');

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

    public function getTotalLabourPriceAttribute()
    {
        $totalLabourPrice = 0;
        // walls
        foreach(json_decode($this->items)->walls as $wall)
        {
            $totalLabourPrice = number_format ( $totalLabourPrice + ($wall->time * 17),2);
        }
        //doors
        foreach(json_decode($this->items)->doors as $door)
        {
            $totalLabourPrice = number_format ( $totalLabourPrice + ($door->time * 17),2);
        }
        return $totalLabourPrice;
    }

    public function getTotalMaterialsPriceAttribute()
    {
        $totalMaterialsPrice = 0;
        // walls
   //     foreach(json_decode($this->materials)->walls as $wall)
    //    {
   //         $totalMaterialsPrice = number_format ( $totalMaterialsPrice + ($wall->time * 17),2);
    //    }
        //doors
   //     foreach(json_decode($this->materials)->doors as $door)
   //     {
  //          $totalMaterialsPrice = number_format ( $totalMaterialsPrice + ($door->time * 17),2);
   //     }
        return $totalMaterialsPrice;
    }

    public function getTotalPriceAttribute()
    {
        return number_format ( $this->totalMaterialsPrice + $this->totalLabourPrice ,2);
    }

}
