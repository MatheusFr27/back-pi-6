<?php

namespace App\BO;

use App\Models\BicosCategory;
use App\Repositories\BicosCategoryRepository;
use Illuminate\Database\Eloquent\Collection;

class BicosCategoryBO
{

    /**
     * Retorna todos os dados do banco de dados.
     *
     * @return  Collection
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function initialize(): ?Collection
    {
        $result = BicosCategoryRepository::initialize();

        return $result;
    }

    /**
     * Busca por um dado em especifico atraves do id.
     *
     * @param  string $id
     *
     * @return  object
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function findById(string $id): ?object
    {
        $result = BicosCategoryRepository::findById($id);

        return $result;
    }

    /**
     * Persiste o dado no banco de dados.
     *
     * @param  BicosCategoryRequest $request
     *
     * @return  object
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function store($request): ?object
    {
        $result = BicosCategoryRepository::store($request);

        return $result;
    }

    /**
     * Atualiza um dado especifico e retorna bool como resultado.
     *
     * @param  BicosCategoryRequest $request
     * @param  BicosCategory $model
     *
     * @return  bool
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function update($request, $model): bool
    {
        $result = BicosCategoryRepository::update($request, $model);

        return $result;
    }

    /**
     * Deleta o dado especifico no banco de dados.
     *
     * @param  BicosCategory $model
     *
     * @return  bool
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function destroy($model): bool
    {
        $result = BicosCategoryRepository::destroy($model);

        return $result;
    }
}
