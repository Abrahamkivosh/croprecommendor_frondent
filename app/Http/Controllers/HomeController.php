<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recommend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recommends = Recommend::latest()->paginate(10);
        $users_count = User::all()->count() ;
        $your_recommends = Auth::user()->recommends->count();
        $recomends_count = Recommend::all()->count() ;
        return view('recommend.dashboard',compact('recommends','users_count','your_recommends','recomends_count'));
    }
    public function systemUsers()
    {
        # code...
        $users = User::withcount("recommends") -> latest()->get();
        return view("recommend.Users.all",compact("users"));
    }
    public function destroy(User $user)
    {
        # code...
        $user->delete();
        return redirect()->route("system.users")->with("success","user deleted successfully");
    }
    public function systemUsersRegister(Request $request)
    {
        $data =  $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role'=>['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
       ]);
      
        $user = $this->create($data);
        return back()->with('success',"user created successfully") ;
        

    }


   

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role'=> $data['role'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function uploadUserImage(Request $request)
    {
        # code...
    }



}
