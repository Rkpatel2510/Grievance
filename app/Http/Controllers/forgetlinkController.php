<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgetlinkController extends Controller
{
    public function index(){
        return view('email.forgetlink');
       }
}
