<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    // mặc định
    //+khoá chính là id
    //+Bảng có timestamps
    //khoá chính là khoá tự tăng

    // Tạo liên kết bảng
    protected $table='product';
    // Khai báo khoá chính 
    // protected $primaryKey = 'idproduct';
    // Bảng không sử dụng timestamps
    // public $timestamps =false;
    // protected $fillable = [
    //     'id','product_code','name','price','state','info','info1','info2','info3','info4','info5','info6','describe','img','img2','img3','category_id'];

    public function category()
    {
        return $this->belongsTo('App\models\category', 'category_id', 'id');
    }

    public function values()
    {
        return $this->belongsToMany('App\models\values', 'values_product', 'product_id', 'values_id'); //(product_id,values_id đều nằm trong bảng chung gian)
    }
    public function variant()
    {
        return $this->hasMany('App\models\variant', 'product_id', 'id');
    }
  
}
