<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class NotificationController extends Controller
{
    public function index(){
        $notifications = Auth::user()->notifications;
        return view('notifications.manage-notification',compact('notifications'));
    }
   
}
