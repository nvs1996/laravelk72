<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\construction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class ConstructionController extends Controller
{
    public function index(Request $request)
    {
        $constructions = construction::orderBy("id","DESC")->paginate(4);
        return view('backend.construction.index', [
            "constructions" => $constructions,
        ]);
    }
    public function ConstructionCreate()
    {
        return view('backend.construction.create', [
            "construction" => construction::all(),
        ]);
    }

    public function ConstructionStore(Request $request)
    {
        $construction =new construction;
        $construction->name = $request->name;
        $construction->detail = $request->detail;
        $construction->detail2 = $request->detail2;
        if($request->hasFile('product_img'))
        {
            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $construction->img=$filename;
        }
        else
        {
            $construction->img='no-img.jpg';
        }
        if($request->hasFile('product_img2'))
        {
            $file = $request->product_img2;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $construction->img2 = $filename;
        }
        else
        {
            $construction->img2='no-img.jpg';
        }
        $construction->save();
        return Redirect::route('construction.index')->with(["thongbao"=>"Tạo dự án thành công!"]);
    }
    public function ConstructionEdit($id)
    {
        $constructions = construction::where("id", $id)->first();
        return view('backend.construction.edit', [
            'constructions' => $constructions,
        ]);
    }

    public function ConstructionUpdate(Request $request,$id){
        $constructions = construction::find($id);
        $constructions->name = $request->name;
        $constructions->detail = $request->detail;
        if($request->hasFile('product_img'))
        {
            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $constructions->img=$filename;
        }
        if($request->hasFile('product_img2'))
        {
            $file = $request->product_img2;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $constructions->img2 = $filename;
        }
        $constructions->save();
        return Redirect::route('construction.index')->with('thongbao','Đã sửa dự án thành công');
    }

    public function Destroy($id)
    {
        $obj = construction::where("id", $id)->first();
        if ($obj) {
            $obj->delete();
            return Redirect::route('construction.index')->with('msg_success','Xóa dự án thành công');
        } else {
            return Redirect::route('construction.index')->withErrors(["Bản ghi không tồn tại!"]);
        }
    }
}
