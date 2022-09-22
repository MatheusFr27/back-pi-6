<?php

namespace App\BO;

use App\Models\OfferBicos;
use App\Repositories\OfferBicosRepository;
use Illuminate\Database\Eloquent\Collection;

class OfferBicosBO
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
        $result = OfferBicosRepository::initialize();

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
        $result = OfferBicosRepository::findById($id);

        return $result;
    }

    /**
     * Persiste o dado no banco de dados.
     *
     * @param  OfferBicosRequest $request
     *
     * @return  object
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function store($request): ?object
    {
        $result = OfferBicosRepository::store($request);

        return $result;
    }

    /**
     * Atualiza um dado especifico e retorna bool como resultado.
     *
     * @param  OfferBicosRequest $request
     * @param  OfferBicos $model
     *
     * @return  bool
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function update($request, $model): bool
    {
        $result = OfferBicosRepository::update($request, $model);

        return $result;
    }

    /**
     * Deleta o dado especifico no banco de dados.
     *
     * @param  OfferBicos $model
     *
     * @return  bool
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function destroy($model): bool
    {
        $result = OfferBicosRepository::destroy($model);

        return $result;
    }
}
