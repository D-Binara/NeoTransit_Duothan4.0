<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public  function dashboardView(){
        return view('dashboard');
    }
}
