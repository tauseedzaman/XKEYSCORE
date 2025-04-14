<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
        'uuid',
        'account_id',
        'interest',
        'confidence',
        'source_info',
        'category',
        'ip_address',
        'source',
        'metadata',
    ];

    protected $casts = [
        'metadata' => 'array',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
