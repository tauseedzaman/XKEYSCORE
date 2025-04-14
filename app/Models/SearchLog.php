<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SearchLog extends Model
{
    protected $fillable = [
        'uuid',
        'user_id',
        'search_query',
        'search_engine',
        'ip_address',
    ];

    protected $casts = [
        'uuid' => 'string',
        'user_id' => 'integer',
        'search_query' => 'string',
        'search_engine' => 'string',
        'ip_address' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
