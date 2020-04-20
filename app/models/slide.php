<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    protected $table='slides';
    protected $fillable = [
        'name',  'img', 'state'
    ];
    public $timestamps =false;
}
