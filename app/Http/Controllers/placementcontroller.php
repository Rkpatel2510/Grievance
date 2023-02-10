<?php

namespace App\Http\Controllers;

use App\Http\Requests\placement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class placementcontroller extends Controller
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
        return view('complaint.placement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, placement $reqVal)
    {
        $type = 4;
        $no = "PL" .date("Y"."m"."d"."H"."i"."s");
        $s_id = $request->session()->get('s_id');
        $placement = $request->input('gender');
        $skp = $request->input('skp');
        $grievance = $request->input('grievance');
        DB::insert('insert into complaint (s_id,c_no,c_type,c_skpname,c_complaint,placement) values (?,?,?,?,?,?)', [$s_id,$no,$type, $skp, $grievance,$placement]);

        return redirect('/student/complaint/create');
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
