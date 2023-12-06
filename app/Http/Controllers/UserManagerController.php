<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\userModel;

class UserManagerController extends Controller
{
    function register(){
        return view('register');
    }
    function login(){
        return view('login');
    }

    public function inventoryPage(Request $request)
    {
        if (auth()->check()) {
            return view('inventory'); 
        }
        return redirect()->back()->with('error', 'create your account first'); 
    }

    function loginPost(Request $request ){
        $request-> validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $user = userModel::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            auth()->login($user);
            $request->session()->put('username', $user->username);


            return redirect()->intended(route('inventoryPage'));
        }
    
        return redirect(route('login'));
    }

        function registrationPost(Request $request){
            $request->validate([
                'username' => 'required|string|max:255|unique:users',
                'password' => [
                    'required',
                    'string',
                    'min:8',  // Minimum length of 8 characters
                    'regex:/^(?=.*[0-9])(?=.*[!@#$%^&*])[0-9a-zA-Z!@#$%^&*]+$/' // Requires at least one number and one symbol
                ],
            ]);

            $data['username'] = $request-> username;
            $data['password'] = Hash::make($request-> password);
            $user = userModel::create($data);

            if(!$user){
                return redirect()->back()->with('error', 'Failed to create user.');
            }
            return redirect(route('login'))-> with("success", "registration success");
        }
    }
