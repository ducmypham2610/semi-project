<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/////////////////////////////////////////////////////////////////
// Homepage
Route::get('/',[HomePageController::class,'getAllProduct']);
Route::get('/detail/{product_id}',[HomePageController::class,'productDetail']);

/////////////////////////////////////////////////////////////////
// admin dashboard
Route::get('/manage',function() {
    return view('admin/layouts/master');
});

/////////////////////////////////////////////////////////////////
// Login logout register
Route::get('/login',[LoginController::class,'getLogin']);
Route::post('/login',[LoginController::class,'postLogin']);
Route::get('/logout',[LoginController::class,'getLogout']);
Route::get('/register',[LoginController::class,'getRegister']);
Route::post('/register',[LoginController::class,'postRegister']);

/////////////////////////////////////////////////////////////////
// control user
Route::get('/addUser',[UserListController::class,'getAddUser']);
Route::post('/addUser',[UserListController::class,'postAddUser']);
Route::get('/listUsers',[UserListController::class,'getData']);
Route::get('/deleteUser/{user_id}',[UserListController::class,'deleteUser']);
Route::get('updateUser/{user_id}',[UserListController::class,'updateUser']);
Route::post('updateUser',[UserListController::class,'saveData']);

/////////////////////////////////////////////////////////////////
// control category
Route::view('/addCategory','admin.pages.categoryManagement.addCategory');
Route::get('/listCategories',[CategoryController::class,'index']);
Route::get('/create',[CategoryController::class,'getAdd']);
Route::post('/create',[CategoryController::class,'postAdd']);
Route::get('/deleteCategory/{category_id}',[CategoryController::class,'deleteCategory']);
Route::get('/updateCategory/{category_id}',[CategoryController::class,'updateCategory']);
Route::post('/updateCategory',[CategoryController::class,'saveData']);

/////////////////////////////////////////////////////////////////
// control product
Route::view('/addProduct','admin.pages.productManagement.addProduct');
Route::get('/listProducts',[ProductController::class,'index']);
Route::get('/addProduct',[ProductController::class,'getAdd']);
Route::post('/addProduct',[ProductController::class,'postAdd']);
Route::get('/deleteProduct/{product_id}',[ProductController::class,'deleteProduct']);
Route::get('/updateProduct/{product_id}',[ProductController::class,'updateProduct']);
Route::post('/updateProduct',[ProductController::class,'saveData']);


/////////////////////////////////////////////////////////////////
//  control cart
Route::get('/cart',[CartController::class,'cart']);
Route::post('add-to-cart',[CartController::class,'addToCart']);
Route::get('/removeFromCart/{cart_id}',[CartController::class,'removeFromCart']);
