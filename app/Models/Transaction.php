<?php

namespace App\Models;
use App\Traits\Uuids;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $incrementing = false;
    use Uuids;

    protected $fillable = array('inv_number','user_id','campaign_id','amount','note','status');

    public function campaign()
    {
        return $this->belongsTo('App\Models\Campaign');
    }
}
