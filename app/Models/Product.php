<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['pro_id','pro_cate','pro_image','pro_image2','pro_new','pro_name','pro_price','pro_discount','pro_description'];
    public $timestamp = true;   
}
