<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavAds extends Model
{
    //

    public function bikes()
    {
        return $this->hasMany(Bike::class);
    }
    public function accessories()
    {
        return $this->hasMany(Accessories::class);
    }
}
