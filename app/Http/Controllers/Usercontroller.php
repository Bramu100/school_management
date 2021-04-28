<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Hash;
class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', User::class); //index
        $role=Role::all();
        $users=User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', User::class); //create
        $roles=Role::all();
        return view('user.create', compact ('roles'));
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
        $this->authorize('create', User::class); //create

        $input=$request->all();
        $input['password']=Hash::make($input['password']);
        $user=User::create($input);
        $user->syncPermissions($request->input('permissions'));

        return redirect('/user/'.$user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $this->authorize('view', $user);//show

        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $this->authorize('update', $user);//edit
        $permissions=Permission::all();
        $roles=Role::all();
        return view('user.edit',compact('user','permissions','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        //
        $this->authorize('update', $user);//update

           $input=$request->all();
        if(!empty($input['password'])){
            $input['password']=Hash::make($input['password']);
        }else{
            unset($input['password']);
        }
        $user->update($input);
        $user->syncPermissions($request->input('permissions'));

        return redirect('/user/'.$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $this->authorize('delete', $user);//delete
        $user->delete();
        return redirect('/user');
    }
    
}
