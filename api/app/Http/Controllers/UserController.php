<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.listUser', ['users'=>$users]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($data);

        $users = User::all();
        return view('user.listUser', ['users'=>$users]);
    }

    public function update($id,Request $request){
        $userId = User::where('id', $id)->first();

        if ($userId){
            $userId -> name = $request -> name;
            $userId -> email = $request -> email;
            $userId -> save();
        }
        $users = User::all();
        return view('user.listUser', ['users'=>$users]);
    }

    public function destroy($id){
        $user = User::find($id);
        if ($user){
            $user->delete();
        }
        $users = User::all();
        return view('user.listUser', ['users'=>$users]);
    }

}
