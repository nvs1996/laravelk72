<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class construction extends Model
{
    protected $table='constructions';
    protected $fillable = [
        'name', 'detail', 'img', 'detail2', 'img2'
    ];
    public $timestamps =false;
}
