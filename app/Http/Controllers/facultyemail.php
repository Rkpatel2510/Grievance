<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facultyemail extends Controller
{
    public function index(){
        return view('email.facultyEmail');
    }
}
