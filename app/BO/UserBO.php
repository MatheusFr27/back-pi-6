<?php

namespace App\BO;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserBO
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
        $result = UserRepository::initialize();

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
        $result = UserRepository::findById($id);

        return $result;
    }

    /**
     * Persiste o dado no banco de dados.
     *
     * @param  UserRequest $request
     *
     * @return  object
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function store($request): ?object
    {
        $result = UserRepository::store($request);

        return $result;
    }

    /**
     * Atualiza um dado especifico e retorna bool como resultado.
     *
     * @param  UserRequest $request
     * @param  User $model
     *
     * @return  bool
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function update($request, $model): bool
    {
        $result = UserRepository::update($request, $model);

        return $result;
    }

    /**
     * Deleta o dado especifico no banco de dados.
     *
     * @param  User $model
     *
     * @return  bool
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function destroy($model): bool
    {
        $result = UserRepository::destroy($model);

        return $result;
    }
}
