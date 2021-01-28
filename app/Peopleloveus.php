<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peopleloveus extends Model
{
    protected $fillable = [
        'image', 'name', 'company', 'text'
    ];
}
