<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class Studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
         /**
          * undocumented constant
          **/
         $this->authorize('viewAny', Student::class); //index

        $students=Student::all();
        $courses=Course::all();
        return view('student.index', compact('students','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Student::class); //create

        $courses=Course::all();
        return view('student.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->authorize('create', Student::class); //store

        $input=$request->all();
        $student= student::create($input);
        return redirect('/student/'.$student->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        $this->authorize('view', $student);//show

        
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        $this->authorize('update', $student);//edit

        $courses= Course::all();
        return view('student.edit', compact('student','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        $this->authorize('update', $student);//update

         $input=$request->all();
         $student->update($input);

        return redirect('/student/'.$student->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        $this->authorize('delete', $student);//delete
        $student->delete();
        return redirect('/student');
    }
}
