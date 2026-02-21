<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Notification $notification, $userId, $message)
    {
        $validate["content"] = $message;
        $validate["user_id"] = $userId;

        $notification->create($validate);

        return redirect()->route("admin.dashboard")->with("success", "You have successfully updated this order's status");
    }
}