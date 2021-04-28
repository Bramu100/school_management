<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;



class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Role::class); //index
        $role=Role::all();
        $roles = Role::all();
        return view('role.index',compact('roles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('viewAny', Role::class); //index
        $role=Role::all();
        $permissions = Permission::all();
        return view('role.create', compact('permissions'));
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
        $this->authorize('create', Role::class); //create
        $input=$request->all();
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permissions'));
        return redirect('/role/'.$role->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
        $this->authorize('view', $role);//show
        return view('role.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
        $this->authorize('update', $role);//edit

        return view('role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
         $this->authorize('update', $role);//edit

         $input=$request->all();
        $role->update($input);

        return redirect('/role/'.$role->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
        $this->authorize('delete', $role);//delete
        $role->delete();
        return redirect('/role');
    }
}
