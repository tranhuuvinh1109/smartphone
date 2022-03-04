<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserShop extends Model
{
    protected $table = 'user_shop';
    protected $fillable = ['id','name','email','password','phone','level','avatar','country'];
    public $timestamp = true;
}
