<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class CampaignImage extends Model
{
    use Uuids;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    protected $fillable = array(
        'name','path','campaign_id','size','username'
    );


    protected $guarded = array();
    
    public function campaign() {
        return $this->belongsTo('App\Models\Campaign'); 
    }
}
