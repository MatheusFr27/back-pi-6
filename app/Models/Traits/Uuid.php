<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid as UuidUuid;

/**
 * Gera uuid automatico para cada dado registrado.
 *
 * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
 */
trait Uuid
{
    protected static function bootUuid()
    {
        static::creating(function (Model $model) {
            $model->id = (string) UuidUuid::uuid4();
        });
    }
}
