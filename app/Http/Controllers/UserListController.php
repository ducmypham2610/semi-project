<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserListController extends Controller
{
    public function getData(){
        $user = User::paginate(10);
        return view('admin/pages/userManagement/listUsers',compact('user'));
    }
}
