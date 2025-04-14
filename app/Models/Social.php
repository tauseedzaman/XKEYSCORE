<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'uuid',
        'source_info',
        'account_id',
        'platform',
        'username',
        'link',
        'metadata',
    ];

    protected $casts = [
        'uuid' => 'string',
        'account_id' => 'integer',
        'platform' => 'string',
        'username' => 'string',
        'link' => 'string',
        'metadata' => 'array', // Assuming metadata is stored as JSON
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
