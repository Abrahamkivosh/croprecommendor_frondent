<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\User;
use App\Models\Recommend;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\RecommendorStoreRequest;

class RecommendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recommends = User::findOrFail(Auth::user()->id)->recommends ;
        return view("recommend.analytic.index",compact('recommends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recommend.analytic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecommendorStoreRequest $request)
    {
        $data = $request->validated() ;
        // Reach the API for recommending crop
       
        try {
            $url = "http://localhost:8000/api/recommend" ;
            $headers = [
                'Content-Type' => 'application/json',
                'accept'=> 'application/json'
            ];
            
            $recommend = Http::asForm()->withHeaders($headers)->get($url,$data)->body() ;
            $recommend= Str::of($recommend)->between("\"","\"") ;
            $data["label"] = $recommend ;
            $data["user_id"] = Auth::user()->id ;
            
        } catch (Throwable $th) {
            $check = Str::of($th->getMessage())->contains("https://curl.haxx.se/libcurl/c/libcurl-errors.html)");
            if (  intval($check) ) {
                $message = "Please Our resource server is down Wait for maintenance!"  ;
            } else {
                # code...
                $message =$th->getMessage() ;
            }
            
            // return $message ;
            $request->session()->flash('error', $message);
            return back()->withInput(['nitrogen','phosphorus','potassium','temperature','humidity','ph','rainfall']);
        }

        Recommend::create($data) ;
        return redirect()->route("recommend.index")->with("success","Your recommendor done is successfully") ;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function show(Recommend $recommend)
    {
        return view('recommend.analytic.show',compact('recommend')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function edit(Recommend $recommend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recommend $recommend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recommend $recommend)
    {
        $recommend->delete();
        return redirect()->route("recommend.index")->with('success',"Your recommend deleted successfully") ;
    }
}
