<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == "admin") {
                return redirect()->route("admin");
            }
                else if ($usertype == "user")
                {
                    return redirect()->route('home');
    }
}
return redirect()->route('home');
    }
}
