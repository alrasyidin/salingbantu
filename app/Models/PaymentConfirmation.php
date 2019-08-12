<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class PaymentConfirmation extends Model
{
    use Uuids;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'transaction_id',
        'value',
        'payment_date',
        'payment_doc',
        'status',
        'user_creditacc',
        'admin_creditacc'
    ];

    public function user_credit_account() {
        return $this->belongsTo('App\Models\User\CreditAccount', 'user_creditacc');
    }

    public function admin_credit_account() {
        return $this->belongsTo('App\Models\AdminCreditAccount', 'admin_creditacc');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function match() {
        return $this->belongsTo('App\Models\Matching\Match');
    }

}
