<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class CreditAccount extends Model
{
    use Uuids;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'number',
        'holder_name',
        'email',
        'phone',
        'user_id',
        'primary',
        'bank_id'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function payment_confirmation() {
        return $this->hasMany('App\Models\PaymentConfirmation');
    }

    public function bank()
    {
        return $this->hasOne('App\Models\Bank', 'code', 'bank_id');
    }


}
