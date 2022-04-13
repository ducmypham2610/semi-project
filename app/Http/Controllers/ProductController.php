<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $product = Product::paginate(10);
        return view('admin/pages/productManagement/listProducts',compact('product'));
    }

    public function getAdd() {
        $categories = Category::all();
        // dd($categories);
        return view('admin/pages/productManagement/addProduct',['categories' => $categories]);
    }

    public function postAdd(Request $req) {
        if($req->hasFile('product_image')) {
            $file = $req->file('product_image');
            // $path = $request->file('images')->store('images/products');
            $path = public_path('img');
            $filename = time().'_' . $file->getClientOriginalName();
            $file->move($path, $filename);
        }
        // dd($req);
        $product = new Product;
        $product->product_name = $req->product_name;
        $product->product_description = $req->product_description;
        $product->product_price = $req->product_price;
        $product->product_image = $filename;
        $product->category_id = $req ->category_id;
        $product->save();
        $all=Product::all();
        return view('admin/pages/productManagement/listProducts',['product'=>$all]);
    }

    public function deleteproduct($product_id) {
        $data = Product::find($product_id);
        // dd($data);
        $data->delete();
        return redirect('listProducts');
    }

    public function updateProduct($product_id) {
        $data = Product::find($product_id);
        $categories = Category::all();
        return view('admin/pages/productManagement/updateproduct',['data'=>$data],['categories' => $categories]);
    }

    public function saveData(Request $req) {
        if($req->hasFile('product_image')) {
            $file = $req->file('product_image');
            // $path = $request->file('images')->store('images/products');
            $path = public_path('img');
            $filename = time().'_' . $file->getClientOriginalName();
            $file->move($path, $filename);
        }
        $data = Product::find($req -> id);
        $data->product_name=$req->product_name;
        $data->product_description=$req->product_description;
        $data->product_price=$req->product_price;
        $data->product_image=$req->$filename;
        $data->category_id=$req->category_id;
        $data->save();
        $all=Product::all();
        return view('admin/pages/productManagement/listProducts',['product'=>$all]);
    }

    public function getData(){
        $data['img'] = ['']
    }
}


//     if($request->hasFile('images')) {
//         $file = $request->file('images');
//         // $path = $request->file('images')->store('images/products');
//         $path = public_path('images/products');
//         $filename = time().'_' . $file->getClientOriginalName();
//         $file->move($path, $filename);
//     }
//     $product = new Product;
//     // $product->productid = $request->productid;
//     $product->productname = $request->productname;
//     $product->price = $request->price;
//     $product->size = $request->size;
//     $product->color = $request->color;
//     $product->images = $filename;
//     $product->category_id = $request->category_id;
//     $product->description = $request->description;
//     $product->save();
//     return redirect()->route('product')-> with('success', 'Product has been added');
// }
