<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	public $timestamps = false;
    protected $fillable = ['store_id','first_name','last_name','email','address_id'];
   	protected $table = 'customer';
}
