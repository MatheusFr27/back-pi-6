<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BicosCategory extends Model
{
    protected $table = 'bicos_category';
    protected $keyType = 'string';
    // protected $incrementing = false;
    // protected $primaryKey = '';
    protected $timestamps = false;

    protected $fillable = [
        'id', 'description'
    ];

    protected $attributes = [
        // 'is_dev' => false,
    ];
}
