<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table='users';
    public $timestamps =false;
    public function info()
    {
        return $this->hasOne('App\models\info', 'users_id', 'id');
    }
}
