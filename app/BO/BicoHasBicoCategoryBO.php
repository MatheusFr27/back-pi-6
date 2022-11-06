<?php

namespace App\BO;

use App\Models\BicoHasBicoCategory;
use App\Repositories\BicoHasBicoCategoryRepository;
use Illuminate\Database\Eloquent\Collection;

class BicoHasBicoCategoryBO
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
        $result = BicoHasBicoCategoryRepository::initialize();

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
        $result = BicoHasBicoCategoryRepository::findById($id);

        return $result;
    }

    /**
     * Persiste o dado no banco de dados.
     *
     * @param  BicoHasBicoCategoryRequest $request
     *
     * @return  object
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function store($request): ?object
    {
        $result = BicoHasBicoCategoryRepository::store($request);

        return $result;
    }

    /**
     * Atualiza um dado especifico e retorna bool como resultado.
     *
     * @param  BicoHasBicoCategoryRequest $request
     * @param  BicoHasBicoCategory $model
     *
     * @return  bool
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function update($request, $model): bool
    {
        $result = BicoHasBicoCategoryRepository::update($request, $model);

        return $result;
    }

    /**
     * Deleta o dado especifico no banco de dados.
     *
     * @param  BicoHasBicoCategory $model
     *
     * @return  bool
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function destroy($model): bool
    {
        $result = BicoHasBicoCategoryRepository::destroy($model);

        return $result;
    }
}
