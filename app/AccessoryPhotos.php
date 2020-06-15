<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class AccessoryPhotos extends Model
{
    protected $fillable = ['accessories_id', 'name'];


    public function accessory()
    {
        return $this->belongsTo(Accessories::class);
    }
    public function getPicture(){
        return Config::get('constants.IMAGE_URL').$this->name;
    }
}
