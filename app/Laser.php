<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laser extends Model
{
   public function getByLimit(int $limit_count = 4)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}
public function tactics()
{
    return $this->hasMany('App\Tactics');
}

}
