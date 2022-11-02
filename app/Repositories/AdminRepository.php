<?php

namespace App\Repositories;

use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminRepository extends GenericRepository
{

    protected static function getClass()
    {
        return Admin::class;
    }

    protected static function getKeyName()
    {
        return Admin::getPrimaryKeyName();
    }

    public static function getTotalizers()
    {
        $query = "select
            count(distinct u1.name) as 'clients',
            count(distinct u2.name) as 'providers',
            count(distinct a.name) as 'admins'
        from users u1, users u2, admins a
        where u1.`type` = 'C' and u2.`type` = 'P' and a.status = 'A'";

        return DB::select($query);
    }
}
