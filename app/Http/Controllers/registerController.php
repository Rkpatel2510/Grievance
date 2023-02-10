<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registration;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("register.register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, registration $reqVa)
    {
        //this function called when we submit in register page


        //validation

        //success - database insert

        $name = $request->input('name');
        $email = $request->input('email');
        $contact = $request->input('contact');
        $enrollment = $request->input('enrollment');
        $vertical = $request->input('vertical');
        $year = $request->input('year');
        $sem = $request->input('semester');
        $password = rand(99999, 999999);
        DB::insert('insert into register (s_name,s_email,s_contact,s_enrollment,s_vertical,s_year,s_sem,password) values (?,?,?,?,?,?,?,?)', [$name, $email, $contact, $enrollment, $vertical, $year, $sem, $password]);


        //session flash message => Your registration successful.

        //redirect -> login return redirect()z
        return redirect("/");
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
