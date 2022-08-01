<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuning extends Model
{
    protected $fillable = [
    'title',
    'makeup_time',
    'laser_evaluation',
    'charge_evaluation',
    'user_id',
    'highlight_impressions',
    'laser_impressions',
    'charge_impressions',
    'thank',
    'deleted_at',
];
    
public function highlight()
{
    return $this->belongsTo('App\Highlight');
}

public function laser()
{
    return $this->belongsTo('App\Laser');
}

public function charge()
{
    return $this->belongsTo('App\Charge');
}
public function tactics()
{
    return $this->belongsTo('App\Tactics');
}
}
