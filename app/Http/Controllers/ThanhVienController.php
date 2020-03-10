<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanhVienController extends Controller
{
    public function GetAdd() 
    { 
        return 'Đây là add ddang o trong controller';
    }

    public function GetThamSo($id=3,$name='Nguyễn văn ninh') 
    {
        echo $id.'<br>';
        echo $name;
    }
    public function GetPhp()
    {
        $data['thamso']=10;
        $data['thamso2']=20;
        return view('test.php.php',$data);
    }
    public function GetLaravel()
    {
        $data['thamso']=10;
        $data['thamso2']=20;
        return view('test.laravel.laravel',$data);
    }


}

