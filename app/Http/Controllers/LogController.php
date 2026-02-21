<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logs = Log::with('User')->latest()->paginate(10);
        return view("Admin.Logs", compact("logs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($message)
    {
        $validate["user_id"] = Auth::user()->id;
        $validate["description"] = "Admin " . Auth::user()->first_name . " " . Auth::user()->last_name . " has just " . $message;

        Log::create($validate);

        return redirect()->route("admin.dashboard")->with("success", "You have successfully " . $message);
    }
}