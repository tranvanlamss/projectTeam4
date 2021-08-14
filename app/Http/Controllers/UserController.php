<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
class UserController extends Controller
{
    
    public function index(){
        $users = User::get();
        return view('admin.user.index',compact('users'));
    }

    public function edit($id){
        $users = User::find($id);
        return view('admin.user.edit',['users' => $users]);
    }

    public function update(Request $request)
    {   
        
        $users = User::find($request->id);
        $users->name = $request->name; 
        $users->email = $request->email;
        $users->role_id = $request->role_id;
        $users->save();

        return redirect('homeadmin');
        
    }

    public function delete($id){
        User::find($id)->delete();
        return redirect()->route('home');
    }
}
