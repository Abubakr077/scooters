<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;


class BikePhotos extends Model
{
    protected $fillable = ['bike_id', 'name'];

    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
    public function accessory()
    {
        return $this->belongsTo(Accessories::class);
    }
    public function getPicture(){
        return Config::get('constants.IMAGE_URL').$this->name;
    }
}
