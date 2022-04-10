<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function getLogin() {
        return view('user/pages/login');
    }

    public function postLogin(Request $request) {
        $arr = ['username' =>$request->username,'password'=>$request->password];
        if(Auth::attempt($arr)) {
            dd('Successful');
        } else {
            dd('Failed!');
        }
    }

    public function getRegister() {
        return view('user/register');
    }

    public function postRegister(Request $request) {
        $user = new User;
        $user->username = $request->username;

        $user->email = $request->email;
        $user->role = 'user';
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('Successfully!','Account created successfully!');
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->intended('login');
    }
}
