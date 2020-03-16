<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product;
use App\models\slide;
use App\models\category;
use App\models\notification;

class indexController extends Controller
{
    public function GetAjax()
    {
        return view('ajax');
    }
    public function PostAjax(request $request)
    {
      
       return response()->json($data);
    }
    public function GetIndex()
    {
        $data['products'] = product::where('img','<>','no-img.jpg')->orderby('created_at','DESC')->take(8)->get();
        $data['notifications'] = notification::orderby('id','DESC')->take(5)->get();
        $data['slides'] = slide::orderby('id','DESC')->take(3)->get();
        $data['product_80s'] = product::where("category_id", "11")->take(4)->get();
        $data['product_60s'] = product::where("category_id", "12")->take(4)->get();
        $data['product_30s_gach_nen'] = product::where("category_id", "17")->take(4)->get();
        $data['product_30s_gach_op'] = product::where("category_id", "18")->take(4)->get();
        $data['product_go_thanh'] = product::where("category_id", "21")->take(4)->get();
        return view('frontend.index',$data);
    }
    public function GetCategoryForHeader()
    {
        // $data['category'] = category::all();
        // return view('frontend.master.header',$data);
        $model = category::all();
        View::make('frontend.master.header')->withModel($model);
    }
    public function GetAbout()
    {
        return view('frontend.about');
    }
    public function GetContact()
    {
        return view('frontend.contact');
        
    }
    public function LinhVuc()
    {
        return view('frontend.linhvuc');
        
    }
    public function DuAn()
    {
        return view('frontend.duan');
        
    }
    public function LienHe()
    {
        return view('frontend.lienhe');
        
    }

}

