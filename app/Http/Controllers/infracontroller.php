<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infracontroller extends Controller
{
    public function index(){
        return view('complaint.infra');

    }
}
