<?php

namespace App\Http\Controllers;

use App\Http\Requests\faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class facultyController extends Controller
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
        return view('complaint.faculty');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, faculty  $reqVal)
    {
        $type = 1;
        $no = "FL" .date("Y"."m"."d"."H"."i"."s");   
        $s_id = $request->session()->get('s_id');
        $name = $request->input('name');
        $subject = $request->input('subject');
        $vertical = $request->input('vertical');
        $sem = $request->input('semester');
        $grievance = $request->input('grievance');
        DB::insert('insert into complaint (s_id,c_no,c_type,c_fname,c_fsubject,c_fvertical,c_fsem,c_complaint) values (?,?,?,?,?,?,?,?)', [$s_id,$no, $type, $name, $subject, $vertical, $sem, $grievance]);

        return redirect('/student/complaint')->withSuccess('Success message');
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
