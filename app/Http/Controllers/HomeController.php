<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *8888888888888888888888888888888888888888
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $campaigns = Campaign::where('status','=','published')->with('user','images')->paginate(6);
        return view('app.index',compact('campaigns'));
    }
    

}
