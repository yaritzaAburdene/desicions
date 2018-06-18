<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\LoginRequest;
use Auth;

class AuthController extends Controller
{
    public function showRegistre(){
    	return view('register');
    }

    public function showLogin(){
    	return view('login');
    }

    public function postRegistre(StoreUserRequest $request){
    	User::create([
    		'firstName' => $request->input('firstName'),
    		'lastName' => $request->input('lastName'),
    		'email' => $request->input('email'),
    		'password' => bcrypt($request->input('password'))
    	]);
    	return redirect('login');
    }

    public function postLogin(LoginRequest $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('index');
        }else{
             return redirect('login');
        }
    }
}
