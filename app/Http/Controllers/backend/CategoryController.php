<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\{AddCategoryRequest,EditCategoryRequest};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\category;
use DB;
class CategoryController extends Controller
{
    //Get category
    public function GetCategory()
    {
        $data['category']=category::all();
        return view('backend.category.category',$data);
    }

    public function PostCategory(AddCategoryRequest $request)
    {
        
      $cate=new category;
      $cate->name=$request->name;
      $cate->parent=$request->parent;
      $cate->save();
      return redirect()->back()->with('thongbao','Đã thêm danh mục thành công!');
    }

    public function PostEditCategory(EditCategoryRequest $request,$id)
    {
        $cate=category::find($id);
        $cate->name=$request->name;
        $cate->parent=$request->parent;
        $cate->save();
        return redirect()->back()->with('thongbao','Đã sửa danh mục thành công!');
    }

    //Get Edit category
    public function EditCategory($id)
    {
        $data['category']=category::all();
        $data['cate']=category::find($id);
        return view('backend.category.editcategory',$data);
    }

    public function DelCategory($id_category)
    {
        // $cate_con=category::where('parent',$id_category)->get();
        // foreach($cate_con as $row)
        // {
        //     $edit_cate=category::find($row->id);
        //     //cập nhập parent của danh mục con
        //     $edit_cate->parent=0;
        //     $edit_cate->save();
        // }
        DB::table('category')->where('parent',$id_category)->update(['parent'=>0]);
        category::destroy($id_category);
        return redirect()->back()->with('thongbao','Đã xoá danh mục thành công!');
    }
}
