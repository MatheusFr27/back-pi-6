<?php

namespace App\Models;

// use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class BicoHasBicoCategory extends Model
{
    // use Uuid;

    protected $table = 'bicos_has_bicos_categories';
    protected $keyType = 'string';
    // protected $incrementing = false;
    // protected $primaryKey = '';
    protected $timestamps = false;

    protected $fillable = [
        'id_bico',
        'id_bico_category'
    ];

    protected $attributes = [
        // 'is_dev' => false,
    ];
}
