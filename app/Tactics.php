<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tactics extends Model
{
    protected $fillable = [
    'highlight_id',
    'user_id',
    'laser_id',
    'charge_id',
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

}
