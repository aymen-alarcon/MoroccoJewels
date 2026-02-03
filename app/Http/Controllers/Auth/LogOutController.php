<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogOutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        Auth::logout();    

        $request->session()->regenerateToken();
        $request->session()->invalidate();

        return redirect()->route("Home");
    }
}
