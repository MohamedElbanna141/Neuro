<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Requests\Website\LoginRequest;
use Illuminate\Support\Facades\Session;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

  
    public function store(Request $request)
    {        
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required|confirmed|min:5',
            'phone' => 'required|unique:users',
            'password_confirmation' => 'required',
        ], [
            'name.required' => 'Name is required',
            'password.required' => 'Password is required',
            'phone.required' => 'Phone is required',
            'password_confirmation.required' => 'password_confirmation is required',
        ]);

        $request['password'] = Hash::make($request->password) ; 

        $user = User::create($validatedData);
        Auth::login($user);
        return redirect()->route('index');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
