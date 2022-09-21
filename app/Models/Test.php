<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';
    protected $keyType = 'string';
    // protected $incrementing = false;
    // protected $primaryKey = '';
    // protected $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'age',
        'created_at',
        'updated_at'
    ];

    protected $attributes = [
        // 'is_dev' => false,
    ];
}
