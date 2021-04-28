<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class Coursecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Course::class); //index

        $courses=Course::all();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Course::class); //create

        return view('course.create');
        
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
        $this->authorize('create', Course::class); //create

        $input=$request->all();
        $course=Course::create($input);
        return redirect('/course/'.$course->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        $this->authorize('view', $course);//show

        $course=Course::find($id);
        return view('course.show', compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        $this->authorize('update', $course);//edit

        return view('course.edit' compact('course'))

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
        $this->authorize('update', $course);//edit
         $input=$request->all();
        $course->update($input);

        return redirect('/course/'.$course->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $this->authorize('delete', $course);//delete
        $course->delete();
        return redirect('/course');
    }
}
