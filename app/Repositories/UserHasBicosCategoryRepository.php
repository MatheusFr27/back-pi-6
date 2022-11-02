<?php

namespace App\Repositories;

use App\Models\UserHasBicosCategory;

class UserHasBicosCategoryRepository extends GenericRepository {

    protected static function getClass() {
        return UserHasBicosCategory::class;
    }

    protected static function getKeyName() {
        return UserHasBicosCategory::getPrimaryKeyName();
    }

}
