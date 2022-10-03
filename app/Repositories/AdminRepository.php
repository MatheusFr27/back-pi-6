<?php

namespace App\Repositories;

use App\Models\Admin;

class AdminRepository extends GenericRepository {

    protected static function getClass() {
        return Admin::class;
    }

    protected static function getKeyName() {
        return Admin::getPrimaryKeyName();
    }

}
