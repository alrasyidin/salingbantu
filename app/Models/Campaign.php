<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;


class Campaign extends Model
{
    use SoftDeletes;
    use Uuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = array(
        'user_id','title','description','goals','endof_campaign','slug','user_id'
    );

    public function images() {
        return $this->hasMany('App\Models\CampaignImage');
    }
}
