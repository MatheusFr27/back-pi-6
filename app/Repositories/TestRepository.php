<?php

namespace App\Repositories;

use App\Models\Test;

class TestRepository extends GenericRepository {

    protected function getClass() {
        return Test::class;
    }

    protected function getKeyName() {
        return Test::getPrimaryKeyName();
    }

}
