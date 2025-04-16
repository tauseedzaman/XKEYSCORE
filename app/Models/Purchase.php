<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'account_id',
        'item',
        'category',
        'currency',
        'price',
        'payment_method',
        'status',
        'ip_address',
        'device',
        'location',
        'purchased_at',
        'source_info',
        'browser',
        'os',
        'metadata',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'metadata' => 'array',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
