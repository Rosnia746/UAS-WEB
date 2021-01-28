<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ourteam extends Model
{
    protected $fillable = [
        'name', 'job_position', 'email', 'about', 'image'
    ];
}
