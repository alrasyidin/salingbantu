<?php

namespace App\Http\Controllers;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function detail($slug){
        $campaign = Campaign::where('slug','=',$slug)->with('user','images')->firstOrFail();
        return view('app.campaign.detail',compact('campaign'));
    }

    public function campaigns(){
        // $campaigns = Campaign::search('1')->get();
        $campaigns = Campaign::where('status','=','published')->with('user','images')->get();
        return view('app.campaigns',compact('campaigns'));
    }

    public function contribute($slug){
        $campaign = Campaign::where('slug','=',$slug)->with('images')->firstOrFail();
        return view('app.campaign.contribute',compact('campaign'));
    }
}
