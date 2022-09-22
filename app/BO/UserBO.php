<?php

namespace App\BO;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use stdClass;
use Throwable;

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

    // /**
    //  * Persiste o dado no banco de dados.
    //  *
    //  * @param  UserRequest $request
    //  *
    //  * @return  object
    //  *
    //  * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
    //  */
    // public function store($request): ?object
    // {
    //     $result = UserRepository::store($request);

    //     return $result;
    // }

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

    public function login($request)
    {
        $credentials = $request->only(['email', 'password']);

        $userExists = Auth::attempt($credentials);

        if ($userExists) {
            $user = UserRepository::getUserByWhere([['email', $credentials['email']]])->toArray();

            dd($user);
        }

        dd($credentials);
    }

    public function register($request)
    {
        DB::beginTransaction();

        try {
            $result = new \stdClass();
            $result->user = UserRepository::store($request->all());

            $token = $result->user->createToken($result->user->id);
            $result->token = 'Bearer ' . $token->accessToken;

            DB::commit();

            return $result;
        } catch (Throwable $e) {
            DB::rollBack();

            Log::info('Description', [$e->getLine(), $e->getFile(), $e->getMessage()]);
            dd($e->getLine(), $e->getFile(), $e->getMessage());
            return null;
        }
    }
}
