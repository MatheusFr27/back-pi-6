<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

/**
 * Criptografa a senha de cada dado registrado.
 *
 * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
 */
trait HashPassword
{
    protected static function booted()
    {
        static::creating(function (Model $model) {
            $model->password = Hash::make($model->password);
        });
    }
}
