<?php

namespace App\Models;

use App\Models\Traits\HashPassword;
use App\Models\Traits\Uuid;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements Authenticatable
{
    use AuthenticableTrait, Uuid, HashPassword;

    protected $table = 'admins';
    protected $keyType = 'string';
    // protected $incrementing = false;
    // protected $primaryKey = '';
    // protected $timestamps = false;

    protected $fillable = [
        'id',
        'email',
        'name',
        'password',
        'master_access',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $attributes = [
        // 'is_dev' => false,
    ];

    protected $hidden = [
        'password'
    ];
}
