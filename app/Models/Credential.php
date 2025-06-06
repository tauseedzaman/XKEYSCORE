<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'account_id',
        'email',
        'password',
        'ip_address',
        'device',
        'location',
        'source_info',
        'browser',
        'os',
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
