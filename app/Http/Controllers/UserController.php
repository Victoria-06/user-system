<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;


class UserController extends Controller
{
    public function createuser(Request $request)
    {
        $user = new users();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect('/Users');
    }
    public function create(){
        // $user = user::find($id);
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->phone = $request->input('phone');
        // $user->save();
        return view ('createuser');

    }
    public function EditUser(Request $request, $id){
        $user = users::find($id);
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->phone = $request->input('phone');
        // $user->save();
        return view ('editpage',['user'=>$user]);

    }
    public function destroy($id)
    {
        $user = users::find($id);
        $user->destroy($id);
        return redirect('/Users');
    }
    public function GetUser(){
        $users = users::all();
        return view ('Users',['users'=>$users]);
        
    }
    public function welcome(){
        $users = users::all();
        return view ('Users',['users'=>$users]);
        
    }
    public function update(Request $request,$id)

    {
        $user = users::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('/Users')->with('flash_message', 'user Updated!'); 
       
    }
}
