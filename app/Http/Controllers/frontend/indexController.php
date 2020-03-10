<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product;

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
        $data['products']=product::where('img','<>','no-img.jpg')->orderby('created_at','DESC')->take(8)->get();
        return view('frontend.index',$data);
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

