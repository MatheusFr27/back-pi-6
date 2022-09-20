<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    protected $fillable = [
        'id',
        'name',
        'age',
        'created_at',
        'updated_at'
    ];
}
