<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class AdminCreditAccount extends Model
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

    public function bank()
    {
        return $this->hasOne('App\Models\Bank', 'code', 'bank_id');
    }
}
