<?php

namespace App\Models;

use App\Models\Traits\HashPassword;
use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use Uuid, HashPassword;

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
