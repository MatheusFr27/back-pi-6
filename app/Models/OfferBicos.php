<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class OfferBicos extends Model
{
    use Uuid;

    protected $table = 'offer_bicos';
    protected $keyType = 'string';
    // protected $incrementing = false;
    // protected $primaryKey = '';
    // protected $timestamps = false;

    protected $fillable = [
        'id', 'id_bico', 'id_user', 'description', 'price', 'status', 'created_at', 'updated_at'
    ];

    protected $attributes = [
        // 'is_dev' => false,
    ];
}
