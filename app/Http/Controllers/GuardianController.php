<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;
use App\Models\Student;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Guardian::class); //index

        $guardians=Guardian::all();

        $students=Student::all();
        return view('guardian.index', compact('guardians','students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Guardian::class); //create

        $students=Student::all();
        
        return view('guardian.create',compact('students'));
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
        $this->authorize('create', Guardian::class); //create

        $input=$request->all();
        $guardian= Guardian::create($input);
        return redirect('/guardian/'.$guardian->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardian $guardian)
    {
        //
        $this->authorize('view', $guardian);//show

        return view('guardian.show',compact('guardian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardian $guardian)
    {
        //
        $this->authorize('update', $guardian);//edit

        return view('guardian.edit', compact('guardian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guardian $guardian)
    {
        //
        $this->authorize('update', $guardian);//edit

        $input=$request->all();
        $guardian->update($input);

        return redirect('/guardian/'.$guardian->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardian $guardian)
    {
        //
        $this->authorize('delete', $guardian);//delete
        $guardian->delete();
        return redirect('/guardian');
    }
}
