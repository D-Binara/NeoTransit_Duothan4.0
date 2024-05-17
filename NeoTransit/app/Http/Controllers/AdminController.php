<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addAdminView()
    {
        return view('admin.adduser');
    }

    public function updateAdminView()
    {
        return view('admin.updateuser');
    }

    public function AdminView()
    {
        return view('admin.dashboard');
    }
}
