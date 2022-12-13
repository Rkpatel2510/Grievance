<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcomplaintlistController extends Controller
{
    public function index(){
        return view('viewpage.studentcomplaintlist');
       }
}
