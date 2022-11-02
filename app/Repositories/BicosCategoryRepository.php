<?php

namespace App\Repositories;

use App\Models\BicosCategory;

class BicosCategoryRepository extends GenericRepository {

    protected static function getClass() {
        return BicosCategory::class;
    }

    protected static function getKeyName() {
        return BicosCategory::getPrimaryKeyName();
    }

}
