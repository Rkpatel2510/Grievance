<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminInfrastructure extends Controller
{
    public function index(){
        return view('admin.admininfrastructure');
    }
}
