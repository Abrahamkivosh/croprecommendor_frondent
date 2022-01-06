<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequestStore;
use App\Http\Requests\UserRequestUpdate;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny',User::class);
        $users = User::latest()->get();
        return view("Users.index",compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',User::class);
        return view("Users.create") ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequestStore $request)
    {
        $this->authorize('create',User::class);
        $data = $request->validated();
        $data['password'] = bcrypt(  $data['password'] );
       $user =  User::create($data) ;
        return redirect()->route('users.show',$user)->with('success',"User created successfully") ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view',$user);
        return view("Users.show",compact("user")) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("Users.edit",compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequestUpdate $request, User $user)
    {
        $data = $request->validated();
        
        if ( $request->has('password') && $request->password != null || $request->password != "") {
            # code...
            $data['password'] = bcrypt(  $data['password'] );
            $user->password =   $data['password'] ;
        }else{
            unset($data['password']) ;
        }
        // return $data ;
        if ($data['role'] == 1) {
            # code...
            $data['role'] = true ;
        } else {
            # code...
            $data['role'] = false ;
        }
        // return $data ;
        
        $user->role = $data['role'] ;
        $user->email = $data['email'] ;
        $user->save();
       
       return redirect()->route('users.show',$user)->with('success',"User updated successfully") ;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success',"User Account Deleted successfully") ;

    }
}
