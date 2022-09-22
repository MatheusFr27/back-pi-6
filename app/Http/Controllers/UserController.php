<?php

namespace App\Http\Controllers;

use App\BO\UserBO;
use App\Helpers\Helpers;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    private $data;
    private $status;
    private $message;

    /**
     * Retorna todos os dados.
     *
     * @return  \Illuminate\Http\Response
     */
    public function initialize()
    {
        $userBO = new UserBO();
        $this->data = $userBO->initialize();
        $this->status = 200;
        $this->message = 'Dado retornado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao buscar pelos os dados.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }

    /**
     * Retorna o primeiro dado através do identificador único.
     *
     * @param    string $id
     *
     * @return  \Illuminate\Http\Response
     */
    public function findById(string $id)
    {
        $userBO = new UserBO();
        $this->data = $userBO->findById($id);
        $this->status = 200;
        $this->message = 'Dado retornado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao buscar pelos os dados.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param    UserRequest  $request
    //  *
    //  * @return  \Illuminate\Http\Response
    //  */
    // public function store(UserRequest $request)
    // {
    //     $userBO = new UserBO();
    //     $this->data = $userBO->store($request);
    //     $this->status = 201;
    //     $this->message = 'Dado criado com sucesso.';

    //     if (!$this->data) {
    //         $this->status = 500;
    //         $this->message = 'Houve um erro ao criar o dado.';
    //     }

    //     return Helpers::response($this->data, $this->status, $this->message);
    // }

    /**
     * Atualiza o dado e retorna true ou false.
     *
     * @param    UserRequest  $request
     * @param    User  $model
     *
     * @return  \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $model)
    {
        $userBO = new UserBO();
        $this->data = $userBO->update($request, $model);
        $this->status = 200;
        $this->message = 'Dado atualizado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao atualizar os dados.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }

    /**
     * Remove o dado e retorna true ou false.
     *
     * @param    User  $model
     * @return  \Illuminate\Http\Response
     */
    public function destroy(User $model)
    {
        $userBO = new UserBO();
        $this->data = $userBO->destroy($model);
        $this->status = 200;
        $this->message = 'Dado deletado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao deletar o dado.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }

    public function login(UserRequest $request)
    {
        $userBO = new UserBO();
        $this->data = $userBO->login($request);
        $this->status = 200;
        $this->message = 'Usuário logado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao logar o usuário.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }

    public function register(UserRequest $request)
    {
        $userBO = new UserBO();
        $this->data = $userBO->register($request);
        $this->status = 201;
        $this->message = 'Usuário registrado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao registrar o usuário.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }
}
