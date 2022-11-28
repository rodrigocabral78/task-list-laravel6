<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'is_active',
        // 'created_by',
        // 'updated_by',
        // 'created_at',
        // 'updated_at',
        // 'deleted_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
        'is_admin'          => 'boolean',
        'is_active'         => 'boolean',
    ];

    /**
     * Set the password to use when connecting (if needed).
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPasswordAttribute($password)
    {
        // $this->attributes['password'] = bcrypt($password);
        $this->attributes['password'] = Hash::make($password);
    }

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    // protected $with = ['author'];

    /**
     * Returns true if user is administrator.
     *
     * @return $this
     */
    public function isAdmin()
    {
        return $this->is_admin === true;
    }

    /**
     * Returns true if user is active.
     *
     * @return $this
     */
    public function isActive()
    {
        return $this->is_active === true;
    }
}
