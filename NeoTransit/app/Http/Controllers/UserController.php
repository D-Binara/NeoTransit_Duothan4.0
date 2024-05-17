<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUserView(){
        return view('admin.adduser');
    }

    public function updateUserView(){
        return view('admin.updateuser');
    }
}
