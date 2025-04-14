<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'uuid',
        'sender_id',
        'receiver_id',
        'content',
        'type',
        'status',
        'source_info',
        'metadata',
    ];

    protected $casts = [
        'sent_at' => 'datetime',
        'metadata' => 'array',
    ];

    // account
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
