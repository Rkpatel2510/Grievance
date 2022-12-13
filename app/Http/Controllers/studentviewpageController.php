<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentviewpageController extends Controller
{
    public function index()
    {
        return view('viewpage.studentviewpage');
    }
}
