<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamCars extends Model
{
    public function cars()
    {
        return $this->belongsToMany('App\Car');
    }
    public function teams()
    {
        return $this->belongsToMany('App\Team');
    }
}
