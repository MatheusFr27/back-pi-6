<?php

namespace App\BO;

use App\Models\Test;
use App\Repositories\TestRepository;

class TestBO
{

    public function initialize(): ?array
    {
        return null;
    }

    public function findById(): ?object
    {
        return (object) [];
    }

    public function store(): ?object
    {
        return (object) [];
    }

    public function update(): bool
    {
        return true;
    }

    public function destroy($model): bool
    {
        return TestRepository::destroy($model);
    }
}
