<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScreenShots extends Model
{
    protected $fillable = [
        'title', 'text', 'image'
    ];
}
