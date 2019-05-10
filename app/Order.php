<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   	protected $table = 'orders';
   	public $primaryKey = 'order_id';
   	public $timestamps = 'true';

   	public function first()
   	{
   		return $this->belongsTo('App\First_meal');
   	}

   	public function second()
   	{
   		return $this->belongsTo('App\Second_meal');
   	}
}
