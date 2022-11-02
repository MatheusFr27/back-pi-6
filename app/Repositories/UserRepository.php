<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends GenericRepository
{

    protected static function getClass()
    {
        return User::class;
    }

    protected static function getKeyName()
    {
        return User::getPrimaryKeyName();
    }

    public static function getUserByWhere(array $where)
    {
        return User::where($where)->first();
    }
}
