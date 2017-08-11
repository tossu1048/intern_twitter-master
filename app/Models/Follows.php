<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follows extends Model
{
    protected $fillable = [
        'followee_id',
        'follower_id',
    ];
}
