<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salad extends Model
{
  		protected $table = 'salads';
    	public $primaryKey = 'salad_id';
   		public $timestamps = 'true';
}
