<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * Get all of the messages for the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    /**
     * Get all of the purchases for the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class);
    }

    /**
     * Get all of the locations for the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locations(): HasMany
    {
        return $this->hasMany(Location::class);
    }

    /**
     * Get all of the credentials for the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function credentials(): HasMany
    {
        return $this->hasMany(Credential::class);
    }

    // activities\
    /**
     * Get all of the activities for the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }

    // socials
    /**
     * Get all of the socials for the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function socials(): HasMany
    {
        return $this->hasMany(Social::class);
    }

}
