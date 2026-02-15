<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::all();
        // return view("Admin.Notifications", compact("notifications"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("Admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Notification $notification)
    {
        $validate = $request->validate([
            "content" => "required",
            "status" => "required",
            "is_deleted" => "required",
            "user_id" => "required|exists:users.id"
        ]);

        $notification->create($validate);

        // return redirect()->route("Admin.Notifications");
    }

    /**
     * Display the specified resource.
     */
    public function show(notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notification $notification)
    {
        $notification = Notification::all();
        // return view("Admin.edit", compact("notification"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, notification $notification)
    {
        $validate = $request->validate([
            "content" => "required",
            "status" => "required",
            "is_deleted" => "required",
            "user_id" => "required|exists:users.id"
        ]);

        $notification->update($validate);

        // return redirect()->route("Admin.Notifications");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notification $notification)
    {
        $notification->delete();

        // return view("Admin.Notifications");
    }
}
