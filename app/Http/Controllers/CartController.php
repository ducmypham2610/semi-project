<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart() {
        $products = DB::table('cart')
        ->join('product','cart.product_id','=','product.product_id')
        ->join('users','users.user_id','=','cart.user_id')
        ->select('product.*','cart.cart_id','users.username')->where('users.user_id',Auth()->user()->user_id)->get();
        $total = 0;
        foreach($products as $pro) {
            $total += ($pro->product_price * 1);
        }
        return view('user.pages.cart',['products'=>$products, 'total'=>$total]);
    }

    public function addToCart(Request $req) {
        // if($req->session()->has('username')) {
        //     return "Hello";
        // } else {
        //     return redirect('login');
        // }
        $cart = new Cart;
        $cart->user_id=Auth()->user()->user_id;
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
    }

    public function removeFromCart($cart_id) {
        $data = Cart::find($cart_id);
        // dd($data);
        $data->delete();
         return redirect('/cart');
    }
}
