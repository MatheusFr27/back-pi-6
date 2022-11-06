<?php

namespace App\Repositories;

use App\Models\BicoHasBicoCategory;

class BicoHasBicoCategoryRepository extends GenericRepository {

    protected static function getClass() {
        return BicoHasBicoCategory::class;
    }

    protected static function getKeyName() {
        return BicoHasBicoCategory::getPrimaryKeyName();
    }

}
