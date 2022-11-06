<?php

namespace App\Models;

// use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class UserHasBicosCategory extends Model
{
    // use Uuid;

    protected $table = 'user_has_bicos_category';
    protected $keyType = 'string';
    // protected $incrementing = false;
    // protected $primaryKey = '';
    protected $timestamps = false;

    protected $fillable = [
        'id', 'id_user', 'id_bicos_category'
    ];

    protected $attributes = [
        // 'is_dev' => false,
    ];
}
