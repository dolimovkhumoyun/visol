<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Second_meal extends Model
{
    protected $table = 'second_meals';
    public $primaryKey = 'second_id';
   	public $timestamps = 'true';

    public function orders()
   		{
   			return $this->hasMany('App\Order');
   		}
}
