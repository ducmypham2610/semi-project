<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;

class LoginController extends Controller
{
    public function getLogin() {
        return view('user/pages/login');
    }

    public function postLogin(Request $request) {
        $arr = ['username' =>$request->username,'password'=>$request->password];
        if(Auth::attempt($arr)) {
            $product = Product::paginate(10);
            return view('index',compact('product'));
        } else {
            return redirect('register');
        }
    }

    public function getRegister() {
        return view('user/pages/register');
    }

    public function postRegister(Request $request) {
        $user = new User;
        $user->username = $request->username;

        $user->email = $request->email;
        $user->role = 'user';
        $user->password = Hash::make($request->password);
        $user->save();
        // session()->flash('success', 'Your message');
        return redirect('/login');
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->intended('login');
    }
}
