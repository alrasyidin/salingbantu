<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Campaign;

class HomeDashboardController extends Controller
{
    public function index(){
        $campaigns = Campaign::where('user_id',"=",\Auth::user()->id)->get();
        $completed = $campaigns->where('completed', 'published');
        $inprogress = $campaigns->filter(function ($task) {
            return $campaigns['completed'] < 100; // Or $task->completed if its an object
        });

        return view('dashboard.index',compact('campaigns'));
    }
}
