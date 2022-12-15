<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class managementEmail extends Controller
{
    public function index(){
        return view('email.manageEmail');
    }
}
