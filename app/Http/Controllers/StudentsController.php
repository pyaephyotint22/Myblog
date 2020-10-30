<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Students::all();
       /* dd($student);*/
       return view('students.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $request->validate([
            "rollno"=>'required|min:5',
            "name"=>'required',
            "email"=>'required|unique:students',
            "phoneno"=>'required',
            "address"=>'required'
        ]);

        $student=new Students;
        $student->rollno=$request->rollno;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phoneno=$request->phoneno;
        $student->address=$request->address;
        $student->save();

            return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students)
    {
    if($student->email==$request->email && $students->rollno == $request->rollno){
        $request->validate([
            "name"=>'required',
            "phoneno"=>'required',
            "address"=>'required'
             ],
             [
                "name.required"=>'fill in black'

             ]);

               }else{
             $request->validate([
            "rollno"=>'required|unique:students|min:5',
            "name"=>'required',
            "email"=>'required|unique:students',
            "phoneno"=>'required',
            "address"=>'required'
        ],
        [
            "name.required"=>'fill in black'        
        ]);
         }

        $student=new Students;
        $student->rollno=$request->rollno;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phoneno=$request->phoneno;
        $student->address=$request->address;
        $student->save();

            return redirect()->route('students.index');
    }

               
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students)
    {
        $student->delete();
        return redirect()->route('students.index');

    }
}
