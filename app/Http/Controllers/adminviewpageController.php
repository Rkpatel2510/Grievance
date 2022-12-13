<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminviewpageController extends Controller
{
    public function index(){
        return view('viewpage.adminviewpage');
       }
}
