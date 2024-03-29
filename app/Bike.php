<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;


class Bike extends Model
{
    protected $fillable = [
        'name',
        'city',
        'province',
        'condition',
        'brand',
        'city_area',
        'registration_city',
        'mileage',
        'date',
        'engine_type',
        'engine_capacity',
        'body_type',
        'color',
        'price',
        'description',
        'seller_name',
        'seller_phone',
        'picture',
        'transmission'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->hasMany(BikePhotos::class);
    }

    public function getPicture()
    {
        return Config::get('constants.IMAGE_URL') . $this->picture;
    }
}
