<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Accessories extends Model
{
    protected $fillable = [
        'name','type',
        'dealer',
        'condition','brand','offer','color',
        'category','description','price','price_type','address','city','province','seller_name',
        'seller_phone',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function photos()
    {
        return $this->hasMany(AccessoryPhotos::class);
    }
    public function getPicture(){
        return Config::get('constants.IMAGE_URL').$this->picture;
    }
}
