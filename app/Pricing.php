<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = [
        'title', 'text', 'onboardingfee', 'annualfee'
    ];
}