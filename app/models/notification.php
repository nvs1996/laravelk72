<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    protected $table='notifications';
    protected $fillable = [
        'title', 'content', 'img', 'img2', 'content2'
    ];
    public $timestamps =false;
}
