<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomePageController extends Controller
{
    public function getAllProduct() {
        $product = Product::paginate(10);
        return view('index',compact('product'));
    }

    public function productDetail($product_id) {
        $data = Product::find($product_id);
        return view('user/pages/product',['data'=>$data]);
    }
}
