<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\customer;
use App\models\Notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $notifications = Notification::paginate(4);
        return view('backend.notification.index', [
            "notifications" => $notifications,
        ]);
    }
    public function NotificationCreate()
    {
        return view('backend.notification.create', [
            "notifications" => Notification::all(),
        ]);
    }

    public function NotificationStore(Request $request)
    {
        $params = $request->all();
        $result = Notification::create([
            "title" => $params["title"],
            "content" => $params["content"],
        ]);
        $result->save();
        return Redirect::route('notification.index')->with(["thongbao"=>"Tạo tin tức thành công!"]);
    }
    public function NotificationEdit($id)
    {
        $notifications = Notification::where("id", $id)->first();
        return view('backend.notification.edit', [
            'notifications' => $notifications,
        ]);
    }

    public function NotificationUpdate(Request $request,$id){
        $notifications = Notification::find($id);
        $notifications->title = $request->title;
        $notifications->content = $request->content;
        $notifications->save();
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
