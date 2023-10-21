<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        $user = User::count();
        return view('Admin.User.content', compact('user'));
    }
}
