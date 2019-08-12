<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Transaction;


class ContributeController extends Controller
{
    public function contribute($slug){
        $campaign = Campaign::where('slug','=',$slug)->with('images')->firstOrFail();
        return view('app.campaign.contribute',compact('campaign'));
    }

    public function generateInvoice(){
        $record = Transaction::latest()->first();
        if (!$record) {
            return 'SLBT0001';
        }
        $string = preg_replace("/[^0-9\.]/", '', $record->inv_number);
        return 'SLBT' . sprintf('%04d', $string+1);
    }

    public function store($slug, Request $request){
        $campaign = Campaign::where('slug','=',$slug)->firstOrFail();
        $this->validate($request,[
            'amount'        => 'required|integer|min:5000|max:1000000000',
            'note'          => 'max:255'
        ]);

        $transaction = Transaction::create([
            'inv_number'    => $this->generateInvoice(),
            'user_id'       => \Auth::user()->id,
            'campaign_id'   => $campaign->id,
            'amount'        => str_replace(",","",$request->get('amount')),
            'note'          => $request->get('note'),
            'status'        => 0,
        ]);

        return redirect()->route('transaction.sucess',['id' => $transaction->id]);
    }

    public function contributeSucess($id){
        $transaction = Transaction::where([
            ['id','=',$id],
            ['user_id','=',\Auth::user()->id]
        ])->firstOrFail();

        if($transaction->exists()){
            $transaction->first();
            return view('app.campaign.contribute-success',compact('transaction'));
        }
        return abort(404);
    }
}
