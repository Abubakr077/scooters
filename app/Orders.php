<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'user_name','user_email','user_phone',
        'house','address','city','postcode','comment'
    ];
}
