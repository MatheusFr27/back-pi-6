<?php

namespace App\BO;

use App\Models\Admin;
use App\Repositories\AdminRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class AdminBO
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
        $result = AdminRepository::initialize();

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
        $result = AdminRepository::findById($id);

        return $result;
    }

    /**
     * Persiste o dado no banco de dados.
     *
     * @param  AdminRequest $request
     *
     * @return  object
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public function store($request): ?object
    {
        $result = AdminRepository::store($request);

        return $result;
    }

    /**
     * Atualiza um dado especifico e retorna bool como resultado.
     *
     * @param  AdminRequest $request
     * @param  Admin $model
     *
     * @return  bool
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public function update($request, $model): bool
    {
        $result = AdminRepository::update($request, $model);

        return $result;
    }

    /**
     * Deleta o dado especifico no banco de dados.
     *
     * @param  Admin $model
     *
     * @return  bool
     *
     * @author  Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public function destroy($model): bool
    {
        $result = AdminRepository::destroy($model);

        return $result;
    }

    public function login($request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        $messages = [
            'messageWarning' => 'Email ou senha incorreto. Por favor, tente novamente mais tarde.',
        ];

        return view('auth.login',  $messages);
    }

    public function getTotalizers()
    {
        $result = AdminRepository::getTotalizers();

        return $result;
    }
}
