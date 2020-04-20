<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\slide;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class SlideController extends Controller
{
    public function index(Request $request)
    {
        $slides = slide::orderBy("id","DESC")->paginate(4);
        return view('backend.slide.index', [
            "slides" => $slides,
        ]);
    }
    public function SlideCreate()
    {
        return view('backend.slide.create', [
            "slide" => slide::all(),
        ]);
    }

    public function SlideStore(Request $request)
    {
        $slide =new slide;
        if($request->hasFile('product_img'))
        {
            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $slide->img=$filename;
        }
        else
        {
            $slide->img='no-img.jpg';
        }
        $slide->state = $request->state;
        $slide->save();
        return Redirect::route('slide.index')->with(["thongbao"=>"Tạo sldie thành công!"]);
    }
    public function SlideEdit($id)
    {
        $slides = slide::where("id", $id)->first();
        return view('backend.slide.edit', [
            'slides' => $slides,
        ]);
    }

    public function SlideUpdate(Request $request,$id){
        $slides = slide::find($id);
        if($request->hasFile('img'))
        {
            $file = $request->img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $slides->img=$filename;
        }
        $slides->state = $request->state;
        $slides->save();
        return Redirect::route('slide.index')->with('thongbao','Đã sửa slide thành công');
    }

    public function Destroy($id)
    {
        $obj = slide::where("id", $id)->first();
        if ($obj) {
            $obj->delete();
            return Redirect::route('slide.index')->with('msg_success','Xóa slide thành công');
        } else {
            return Redirect::route('slide.index')->withErrors(["Bản ghi không tồn tại!"]);
        }
    }
}
