<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'uuid',
        'account_id',
        'type',
        'description',
        'category',
        'occurred_at',
        'source_info',
        'ip_address',
        'device',
        'location',
        'browser',
        'os',
        'metadata',
    ];

    protected $casts = [
        'occurred_at' => 'datetime',
        'metadata' => 'array',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }


}
