<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'email',
        'username',
        'password',
        'source_info',
        'gender',
        'dob',
        'phone',
        'ip_address',
        'device',
        'location',
        'occupation',
        'income_range',
        'marital_status',
        'education',
        'profile_picture',
        'bio',
        'website',
        'metadata',
    ];
}
