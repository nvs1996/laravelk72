<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table='projects';
    protected $fillable = [
        'name', 'detail', 'img', 'detail2', 'img2'
    ];
    public $timestamps =false;
}
