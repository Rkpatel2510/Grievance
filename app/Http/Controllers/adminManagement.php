<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminManagement extends Controller
{
    public function index(){
        return view('admin.adminmanagement');
    }
}
