<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
{
    if (auth()->user()->is_admin) {
        return redirect()->route('admin.dashboard');
    }

    return view("dashboard");
}

    public function Login()
    {

        return view("auth.login");
    }
}
