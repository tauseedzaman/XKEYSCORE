<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'uuid',
        'account_id',
        'ip_address',
        'device',
        'country',
        'region',
        'city',
        'latitude',
        'longitude',
        'timezone',
        'isp',
        'organization',
        'postal_code',
        'source_info',
        'metadata',
    ];

    protected $casts = [
        'latitude' => 'decimal:7',
        'longitude' => 'decimal:7',
        'metadata' => 'array',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
