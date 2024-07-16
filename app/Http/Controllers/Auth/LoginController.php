<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function create()
    {
        return view('layouts.login');
    }

    public function store(LoginRequest $request)
    {
        if (auth()->attempt($request->validated())) {
            return redirect()->intended('/');
        }

        return back();
    }
}
