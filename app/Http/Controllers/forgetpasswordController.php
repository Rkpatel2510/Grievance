<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgetpasswordController extends Controller
{
    public function index (){
        return view ('forgetpassword.forgetpassword');
    }
}
