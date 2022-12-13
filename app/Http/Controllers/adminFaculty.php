<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminFaculty extends Controller
{
    public function index(){
        return view('admin.adminfaculty');
    }
}
