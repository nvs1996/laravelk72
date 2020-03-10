<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\customer;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function GetIndex()
    {
        $month=Carbon::now()->format('m');
        $year=Carbon::now()->format('Y');

        for($i=1;$i<=$month;$i++)
        {
            $dt['Tháng '.$i]=customer::where('state',1)->wheremonth('updated_at', $i)->whereyear('updated_at',$year)->sum('total');
        }
        $data['data']=$dt;
        $data['sdh']=customer::where('state',1)->wheremonth('updated_at', $month)->whereyear('updated_at',$year)->count();
        $data['doanhthu']=$dt['Tháng '.(int)$month];
        return view('backend.index',$data);
    }
}
