<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Campaign;

class HomeDashboardController extends Controller
{
    public function index(){
        return view('dashboard.index',[
            'campaigns' => $this->getCampaignData() 
        ]);
    }
    public function getCampaignData(){
        $published = Campaign::where([
            ['user_id',"=",\Auth::user()->id],
            ['status','=','published']
            ])->count();
        $finish = Campaign::where([
                ['user_id',"=",\Auth::user()->id],
                ['status','=','finish']
                ])->count();
        $cancel = Campaign::where([
                ['user_id',"=",\Auth::user()->id],
                ['status','=','cancel']
                ])->count();
        $suspend = Campaign::where([
                ['user_id',"=",\Auth::user()->id],
                ['status','=','suspend']
                ])->count();
    
        return compact('published','finish','cancel','suspend');
    }
}
