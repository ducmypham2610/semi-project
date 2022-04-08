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

    public function getAddUser() {
        return view('admin/pages/userManagement/addUser');
    }

    public function postAddUser(Request $req) {
        $user = new User;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->role = 'user';
        $user->password = $req->password;
        // dd($user);
        $user->save();
        $all=User::all();
        // dd($all);
        return view('admin/pages/userManagement/listUsers',['user'=>$all]);
    }

    function deleteUser($user_id) {
        $data = User::find($user_id);
        $data->delete();
        return redirect('listUsers');
    }

    function updateUser($user_id) {
        $data = User::find($user_id);
        return view('admin/pages/userManagement/updateUser',['data'=>$data]);
    }

    public function saveData(Request $req) {
        // dd($req);
        $data = User::find($req -> id);
        $data->username = $req->username;
        $data->email=$req->email;
        $data->role=$req->role;
        $data->save();
        // dd($data);
        $all=User::all();
        return view('admin/pages/userManagement/listUsers',['user'=>$all]);
    }
}
