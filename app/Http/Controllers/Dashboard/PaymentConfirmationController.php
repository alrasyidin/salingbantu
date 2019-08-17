<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CreditAccount;
use App\Models\AdminCreditAccount;
use App\Models\Transaction;
use App\Models\PaymentConfirmation;
use File;
use Image;

class PaymentConfirmationController extends Controller
{
    public function index($id){
        $creditaccounts = CreditAccount::where('user_id',\Auth::user()->id)->get();
        $admincreditaccounts = AdminCreditAccount::all();
        $transaction = Transaction::where('id','=',$id)->firstOrfail();
        return view('app.dashboard.paymentconfirmation.index',compact('creditaccounts','admincreditaccounts','transaction'));
    }

    public function store(Request $request){
        $this->validate($request, [
            "transaction_id" => "required",
            "value"  => "required|string|max:25",
            "user_creditacc"  => "required|string",
            "admin_creditacc"  => "required|string",
            "payment_date"  => "required|date",
            "payment_doc"  => "required|image|max:2000",
            "payment_note"  => "max:255",
        ]);

        if($image = $request->file('payment_doc')){
            $this->path = storage_path('app/public/payment_doc/');
            $this->dimensions = ['300', '60'];
            if (!File::isDirectory($this->path)) {
                File::makeDirectory($this->path, 0777, true);
            }

            $imageName   = uniqid().'_in_'.date('Ymd').'.'.$image->getClientOriginalExtension();
            Image::make($image->getRealPath())->save($this->path.'/'.$imageName);
            foreach ($this->dimensions as $row) {
                $canvas = Image::canvas($row, $row);
                $resizeImage  = Image::make($image->getRealPath())->resize($row, $row, function($constraint) {
                    $constraint->aspectRatio();
                });
                if (!File::isDirectory($this->path.'/'.$row)) {
                    File::makeDirectory($this->path.'/'.$row);
                }
                $canvas->insert($resizeImage,'center');
                $canvas->save($this->path.'/'.$row.'/'.$imageName);
            }
        }

        $payment = new PaymentConfirmation([
            'transaction_id' => $request->transaction_id,
            'value' => str_replace('.','',$request->value),
            'user_creditacc' => $request->user_creditacc,
            'admin_creditacc' => $request->admin_creditacc,
            'payment_date' => $request->payment_date,
            'payment_doc' => $imageName,
            'payment_note' => $request->payment_note,
            'user_id' => \Auth::user()->id
        ]);

        $payment->save();

        return redirect()->back()->with('success','Berhasil Mengajukan Konfirmasi Pemabayaran');
    }

}
