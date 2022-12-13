<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminviewController extends Controller
{
   public function index(){
    return view('viewpage.admincomplaint');
   }
}
