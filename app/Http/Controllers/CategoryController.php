<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index() {
        $category = Category::paginate(10);
        return view('admin/pages/categoryManagement/listCategories',compact('category'));
    }

    public function getAdd() {
        return view('admin/pages/categoryManagement/addCategory');
    }

    public function postAdd(Request $req) {
        // dd($req);
        $category = new Category;
        $category->category_name = $req->category_name;
        $category->category_description = $req->category_description;
        $category->save();
        $all=Category::all();
        return view('admin/pages/categoryManagement/listCategories',['category'=>$all]);
    }

    public function deleteCategory($category_id) {
        $data = Category::find($category_id);
        // dd($data);
        $data->delete();
        return redirect('listCategories');
    }

    public function updateCategory($category_id) {
        $data = Category::find($category_id);
        return view('admin/pages/categoryManagement/updateCategory',['data'=>$data]);
    }

    public function saveData(Request $req) {
        $data = Category::find($req -> id);
        $data->category_name=$req->category_name;
        $data->category_description=$req->category_description;
        $data->save();
        $all=Category::all();
        return view('admin/pages/categoryManagement/listCategories',['category'=>$all]);
    }
}
