<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use db;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('studentform');
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
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'dob'=>'required',
            'email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|email',
            'address'=>'required',
            'phoneno'=>'required|digits:10',
            'department'=>'required',

        ]);
       
        $students = new student;
        $students->std_name = $request->input('name');
        $students->std_dob = $request->input('dob');
        $students->std_email = $request->input('email');
        $students->std_address = $request->input('address');
        $students->std_phoneno = $request->input('phoneno');
        $students->std_department = $request->input('department');
    try{
        $students->save();
        return redirect('/student')->with('success','data saved');
    }catch(\Illuminate\Database\QueryException $e){
        $errorCode = $e->errorInfo[1];
        if($errorCode=='1062')
        {
            return back()->with('error','Email is already exist');
        }
        else{
            return back()->with('error',$e->getMessage());
        }
    }
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
