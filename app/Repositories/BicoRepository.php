<?php

namespace App\Repositories;

use App\Models\Bico;

class BicoRepository extends GenericRepository {

    protected static function getClass() {
        return Bico::class;
    }

    protected static function getKeyName() {
        return Bico::getPrimaryKeyName();
    }

}
