<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, admin $reqVal)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $records = DB::table('admin')->where('a_email', $email)->where('a_password', $password)->first();

        // $request->setLaravelSession(session());

        if ($records) {
            $request->session()->put('a_id', $records->a_id);
            $request->session()->put('a_name', $records->a_name);
            // echo "<pre>";
            // print_r(session()->all());  //s_id and s_name pn show thai 6 ae puchvanu 6
            // exit;
            return redirect('/admin/complaint/create');
        } else {
            session()->flash('status', 'Invalid email or password');
            return redirect('/admin');
        }

        // return view('viewpage.admincomplaint');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
