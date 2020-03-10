<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Cost;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class CostController extends Controller
{
    public function index(Request $request)
    {
        $costs = Cost::orderBy("id","DESC")->paginate(4);
        return view('backend.cost.index', [
            "costs" => $costs,
        ]);
    }
    public function CostCreate()
    {
        return view('backend.cost.create', [
            "cost" => Cost::all(),
        ]);
    }

    public function CostStore(Request $request)
    {
        $cost =new cost;
        $cost->detail = $request->detail;
        $cost->detail2 = $request->detail2;
        if($request->hasFile('product_img'))
        {
            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $cost->img=$filename;
        }
        else
        {
            $cost->img='no-img.jpg';
        }
        if($request->hasFile('product_img2'))
        {
            $file = $request->product_img2;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $cost->img2 = $filename;
        }
        else
        {
            $cost->img2='no-img.jpg';
        }
        $cost->save();
        return Redirect::route('cost.index')->with(["thongbao"=>"Tạo dự án thành công!"]);
    }
    public function CostEdit($id)
    {
        $costs = Cost::where("id", $id)->first();
        return view('backend.cost.edit', [
            'costs' => $costs,
        ]);
    }

    public function CostUpdate(Request $request,$id){
        $costs = Cost::find($id);
        $costs->detail = $request->detail;
        $costs->detail2 = $request->detail2;
        if($request->hasFile('img'))
        {
            $file = $request->img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $costs->img = $filename;
        }
        if($request->hasFile('product_img2'))
        {
            $file = $request->product_img2;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $costs->img2 = $filename;
        }
        $costs->save();
        return Redirect::route('cost.index')->with('thongbao','Đã sửa dự án thành công');
    }

    public function Destroy($id)
    {
        $obj = Cost::where("id", $id)->first();
        if ($obj) {
            $obj->delete();
            return Redirect::route('cost.index')->with('msg_success','Xóa dự án thành công');
        } else {
            return Redirect::route('cost.index')->withErrors(["Bản ghi không tồn tại!"]);
        }
    }
}
