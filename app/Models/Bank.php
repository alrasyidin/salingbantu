<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function creditaccount()
    {
        return $this->belongsTo('App\Models\User\CreditAccount');
    }
}
