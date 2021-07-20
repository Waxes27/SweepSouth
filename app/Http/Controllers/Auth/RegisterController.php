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
        // dd($request);
        $this->validate($request, [
            'name' => 'required|max:255',
            'id_number' => 'required|max:12',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            'username' => 'required|max:255'
        ]);

        Employee::create([
            'id_number' => Hash::make($request->id_number),
            'first_name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if (auth()->attempt($request->only('email', 'password'))){
            return redirect()->route('services');
        }
        else{
            dd("failed");
        }


    }

    public function userStore(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);
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
