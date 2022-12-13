<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class placementEmail extends Controller
{
    public function index(){
        return view('email.placementEmail');

    }
}
