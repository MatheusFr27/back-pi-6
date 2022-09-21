<?php

namespace App\BO;

use App\Models\Test;
use App\Repositories\TestRepository;
use Illuminate\Database\Eloquent\Collection;

class TestBO
{

    /**
     * Retorna todos os dados do banco de dados.
     *
     * @return Collection
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function initialize(): ?Collection
    {
        $result = TestRepository::initialize();

        return $result;
    }

    /**
     * Busca por um dado em especifico atraves do id.
     *
     * @param string $id
     *
     * @return object
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function findById(string $id): ?object
    {
        $result = TestRepository::findById($id);

        return $result;
    }

    /**
     * Persiste o dado no banco de dados.
     *
     * @param TestRequest $request
     *
     * @return object
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function store($request): ?object
    {
        $result = TestRepository::store($request);

        return $result;
    }

    /**
     * Atualiza um dado especifico e retorna bool como resultado.
     *
     * @param TestRequest $request
     * @param Test $model
     *
     * @return bool
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function update($request, $model): bool
    {
        $result = TestRepository::update($request, $model);

        return $result;
    }

    /**
     * Deleta o dado especifico no banco de dados.
     *
     * @param Test $model
     *
     * @return bool
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function destroy($model): bool
    {
        $result = TestRepository::destroy($model);

        return $result;
    }
}
