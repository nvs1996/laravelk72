<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\customer;
use App\models\notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $notifications = notification::paginate(4);
        return view('backend.notification.index', [
            "notifications" => $notifications,
        ]);
    }
    public function NotificationCreate()
    {
        return view('backend.notification.create', [
            "notifications" => notification::all(),
        ]);
    }

    public function NotificationStore(Request $request)
    {
        $notification =new notification;
        $notification->title = $request->title;
        $notification->content = $request->content;
        $notification->content2 = $request->content2;
        if($request->hasFile('product_img'))
        {
            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $notification->img=$filename;
        }
        else
        {
            $notification->img='no-img.jpg';
        }
        if($request->hasFile('product_img2'))
        {
            $file = $request->product_img2;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $notification->img2 = $filename;
        }
        else
        {
            $notification->img2='no-img.jpg';
        }
        $notification->save();
        return Redirect::route('notification.index')->with(["thongbao"=>"Tạo tin tức thành công!"]);
    }
    public function NotificationEdit($id)
    {
        $notifications = notification::where("id", $id)->first();
        return view('backend.notification.edit', [
            'notifications' => $notifications,
        ]);
    }

    public function NotificationUpdate(Request $request,$id){
        $notification = notification::find($id);
        $notification->title = $request->title;
        $notification->content = $request->content;
        $notification->content2 = $request->content2;
        if($request->hasFile('product_img'))
        {
            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $notification->img=$filename;
        }
        if($request->hasFile('product_img2'))
        {
            $file = $request->product_img2;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $notification->img2 = $filename;
        }
        $notification->save();
        return Redirect::route('notification.index')->with('thongbao','Đã sửa tin tức thành công');
    }

    public function NotificationDestroy($id)
    {
        $obj = Notification::where("id", $id)->first();
        if ($obj) {
            $obj->delete();
            return Redirect::route('notification.index')->with('msg_success','Xóa tin tức thành công');
        } else {
            return Redirect::route('notification.index')->withErrors(["Bản ghi không tồn tại!"]);
        }
    }
}
