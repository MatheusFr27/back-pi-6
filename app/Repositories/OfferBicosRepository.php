<?php

namespace App\Repositories;

use App\Models\OfferBicos;

class OfferBicosRepository extends GenericRepository {

    protected static function getClass() {
        return OfferBicos::class;
    }

    protected static function getKeyName() {
        return OfferBicos::getPrimaryKeyName();
    }

}
