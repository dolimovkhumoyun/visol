<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class First_meal extends Model
{
    //
    	protected $table = 'first_meals';
    	public $primaryKey = 'first_id';
   		public $timestamps = 'true';

   		public function orders()
   		{
   			return $this->hasMany('App\Order');
   		}
}
