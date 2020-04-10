<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\notification;
use Cart;
class NotificationController extends Controller
{
    
    public function getNotification()
    {
        $notifications = notification::orderBy("id", "DESC")->paginate(8);
        return view('frontend.notification', [
            "notifications" => $notifications,
        ]);
    }
    public function GetNotificationDetail($id)
    {
        $notifications=notification::find($id);
        return view('frontend.notificationdetail', [
            "notifications" => $notifications,
        ]);
    }
}
