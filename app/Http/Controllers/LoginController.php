<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }
    
        /**
         * Handle an authentication attempt.
         *
         * @param  \Illuminate\Http\Request $request
         *
         * @return Response
         */
        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');
     
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->route('cit.vis');

                
            }else {
                return view('auth.login');
            }
        }
    
}

