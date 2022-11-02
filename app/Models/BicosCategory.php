<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class BicosCategory extends Model
{
    use Uuid;

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
