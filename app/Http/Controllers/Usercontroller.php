<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class Usercontroller extends Controller
{
    public function user(){
        $user= User::all();
        return view('Admin.User.table', compact('user'));
    }
    public function formUser()
    {

        $tags = User::all();
        return view('Admin.User.createUser', compact('tags'));
    }
    public function createUser(User $request)
    {
        // dd($request->all())
            $request->replicate([
                'user_id' => 'required',
                'name' => 'required',
            ]);
            $user = new User();
            $user->fill([
                'user_id' => $request->user_id,
                'name' => $request->name,
            ]);
        
            return redirect()->route('Admin.User.table')->with('Create', "Data $request->name Berhasil Disimpan!");
        }
        
}
