<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{//Get ALLLLL the data from users !
    public function index(){
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
}
