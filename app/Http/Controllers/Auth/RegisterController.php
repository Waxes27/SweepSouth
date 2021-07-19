<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }


    public function partner()
    {
        return view('auth.partner');
    }

    public function employeeStore(Request $request)
    {
        // dd(Hash::make($request->id_number));
        Employee::create([
            'id_number' => Hash::make($request->id_number),
            'first_name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        dd('Register Attempt');

    }

    public function userStore(Request $request)
    {
        // dd(Hash::make($request->id_number));
        User::create([
            // 'id_number' => Hash::make($request->id_number),
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        dd('Register Attempt');

    }
}
