<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Transaction;

class HomeDashboardController extends Controller
{
    public function index(){
        return view('app.dashboard.index',[
            'campaigns' => $this->getCampaignData(),
            'amount' => $this->amount(\Auth::user()->id)
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

    public function amount($id){
        return Transaction::where([['user_id',"=",$id],['status','=','3']])->sum('amount');
    }

    public function getTransaction(Request $request){
        if($request->ajax()){
            $transactions = Transaction::where('user_id',"=",\Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
            return view('app.dashboard.parts.transactiondata',compact('transactions'))->render();
        }
    }
}
