<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\project;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = project::orderBy("id","DESC")->paginate(4);
        return view('backend.project.index', [
            "projects" => $projects,
        ]);
    }
    public function ProjectCreate()
    {
        return view('backend.project.create', [
            "project" => project::all(),
        ]);
    }

    public function ProjectStore(Request $request)
    {
        $project =new project;
        $project->name = $request->name;
        $project->detail = $request->detail;
        $project->detail2 = $request->detail2;
        if($request->hasFile('product_img'))
        {
            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $project->img=$filename;
        }
        else
        {
            $project->img='no-img.jpg';
        }
        if($request->hasFile('product_img2'))
        {
            $file = $request->product_img2;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $project->img2 = $filename;
        }
        else
        {
            $project->img2='no-img.jpg';
        }
        $project->save();
        return Redirect::route('project.index')->with(["thongbao"=>"Tạo dự án thành công!"]);
    }
    public function ProjectEdit($id)
    {
        $projects = project::where("id", $id)->first();
        return view('backend.project.edit', [
            'projects' => $projects,
        ]);
    }

    public function ProjectUpdate(Request $request,$id){
        $projects = project::find($id);
        $projects->name = $request->name;
        $projects->detail = $request->detail;
        if($request->hasFile('product_img'))
        {
            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $projects->img=$filename;
        }
        if($request->hasFile('product_img2'))
        {
            $file = $request->product_img2;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $projects->img2 = $filename;
        }
        $projects->save();
        return Redirect::route('project.index')->with('thongbao','Đã sửa dự án thành công');
    }

    public function Destroy($id)
    {
        $obj = project::where("id", $id)->first();
        if ($obj) {
            $obj->delete();
            return Redirect::route('project.index')->with('msg_success','Xóa dự án thành công');
        } else {
            return Redirect::route('project.index')->withErrors(["Bản ghi không tồn tại!"]);
        }
    }
}
