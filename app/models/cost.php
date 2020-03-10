<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $table='costs';
    protected $fillable = [
       'detail', 'img', 'detail2', 'img2'
    ];
    public $timestamps =false;
}
