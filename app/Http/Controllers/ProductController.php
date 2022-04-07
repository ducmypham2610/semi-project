<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $product = Product::paginate(10);
        return view('admin/pages/productManagement/listProducts',compact('product'));
    }

    public function getAdd() {
        return view('admin/pages/productManagement/addProduct');
    }

    public function postAdd(Request $req) {
        // dd($req);
        $product = new Product;
        $product->product_name = $req->product_name;
        $product->product_description = $req->product_description;
        $product->product_price = $req->product_price;
        $product->product_image = $req->product_image;
        $product->save();
        $all=Product::all();
        return view('admin/pages/productManagement/listProducts',['product'=>$all]);
    }

    public function deleteproduct($product_id) {
        $data = Product::find($product_id);
        // dd($data);
        $data->delete();
        return redirect('product/listProducts');
    }

    public function updateproduct($product_id) {
        $data = Product::find($product_id);
        return view('admin/pages/productManagement/updateproduct',['data'=>$data]);
    }

    public function saveData(Request $req) {
        $data = Product::find($req -> id);
        $data->product_name=$req->product_name;
        $data->product_description=$req->product_description;
        $data->save();
        $all=Product::all();
        return view('admin/pages/productManagement/listProducts',['product'=>$all]);
    }
}
