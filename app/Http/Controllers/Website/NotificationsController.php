<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Section;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function settings()
    {
        $sections = Section::all();


        return view('website.notifications.settings',compact('sections'));
    }


    public function index()
    {
        $sections = Section::all();
        $notifications = Notification::orderByDesc('id')->where('user_id',auth()->user()->id)->get();

        return view('website.notifications.index',compact('sections','notifications'));
    }



    public function deleteNotificationById($notificationId)
    {
        $notification = Notification::find($notificationId);

        if ($notification) {
            $notification->delete();
            return redirect()->back()->with('msg', 'Notification deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Notification not found.');
        }
    }

    public function deleteAllNotifications()
    {
        Notification::where('user_id', auth()->user()->id)->delete();

        return redirect()->back()->with('success', 'All notifications deleted successfully.');
    }






}
