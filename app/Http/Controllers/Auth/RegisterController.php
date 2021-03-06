<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {

        $services = Service::distinct()->get(['type']);
        return view('auth.register', [
            'services' => $services
        ]);
    }


    public function partner()
    {
        $services = Service::distinct()->get(['type']);
        return view('auth.partner', [
            'services' => $services
        ]);
    }

    public function partnerStore(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required|max:255',
            'id_number' => 'required|max:13|min:12',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            'username' => 'required|max:255'
        ]);

        User::create([
            'type' => '1',
            'username' => $request->username,
            'id_number' => Hash::make($request->id_number),
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if (auth()->attempt($request->only('username', 'password'))){
            return redirect()->route('dashboard');
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
            'type' => '0',
            'name' => $request->name,
            // 'id_number' => Hash::make($request->id_number),
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if(auth()->attempt($request->only('username','password'))){
            return redirect()->route('services');
        }

    }
}
