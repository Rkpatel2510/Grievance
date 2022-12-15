<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infraEmail extends Controller
{
    public function index(){
        return view('email.infraEmail');
    }
}
