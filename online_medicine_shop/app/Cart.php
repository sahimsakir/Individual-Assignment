<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //protected $table = "user_table";
    public $timestamps = false;
    //const CREATED_AT = 'created_time';
    //const UPDATED_AT = 'updated_time';
    protected $primaryKey = 'cartID';
}
