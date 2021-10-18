<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recommend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
