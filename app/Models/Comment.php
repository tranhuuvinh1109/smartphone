<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = ['id','id_user','email_user','id_product','rate','content'];
    public $timestamp = true;
}
