<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'mobile',
        'company_name',
        'service',
        'message'
    ];
}
