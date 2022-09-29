<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Bico extends Model
{
    use Uuid;

    protected $table = 'bicos';
    protected $keyType = 'string';
    // protected $incrementing = false;
    // protected $primaryKey = '';
    // protected $timestamps = false;

    protected $fillable = [
        'id', 'id_user', 'title', 'description', 'created_at', 'updated_at'
    ];

    protected $attributes = [
        // 'is_dev' => false,
    ];
}
