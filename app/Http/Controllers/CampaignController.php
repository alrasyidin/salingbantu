<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function detail(){
        return view('app.campaign.detail');
    }
}
