<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('username', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }
        if(auth()->user()->type == 0){
            return redirect()->route('services');
        }
        return redirect()->route('dashboard');
    }

    public function partnerLogin()
    {
        dd('login Attempt');
    }
}
