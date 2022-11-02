<?php

namespace App\Http\Controllers;

use App\BO\UserHasBicosCategoryBO;
use App\Helpers\Helpers;
use App\Http\Requests\UserHasBicosCategoryRequest;
use App\Models\UserHasBicosCategory;

class UserHasBicosCategoryController extends Controller
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
        $userHasBicosCategoryBO = new UserHasBicosCategoryBO();
        $this->data = $userHasBicosCategoryBO->initialize();
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
        $userHasBicosCategoryBO = new UserHasBicosCategoryBO();
        $this->data = $userHasBicosCategoryBO->findById($id);
        $this->status = 200;
        $this->message = 'Dado retornado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao buscar pelos os dados.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    UserHasBicosCategoryRequest  $request
     *
     * @return  \Illuminate\Http\Response
     */
    public function store(UserHasBicosCategoryRequest $request)
    {
        $userHasBicosCategoryBO = new UserHasBicosCategoryBO();
        $this->data = $userHasBicosCategoryBO->store($request);
        $this->status = 201;
        $this->message = 'Dado criado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao criar o dado.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }

    /**
     * Atualiza o dado e retorna true ou false.
     *
     * @param    UserHasBicosCategoryRequest  $request
     * @param    UserHasBicosCategory  $model
     *
     * @return  \Illuminate\Http\Response
     */
    public function update(UserHasBicosCategoryRequest $request, UserHasBicosCategory $model)
    {
        $userHasBicosCategoryBO = new UserHasBicosCategoryBO();
        $this->data = $userHasBicosCategoryBO->update($request, $model);
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
     * @param    UserHasBicosCategory  $model
     * @return  \Illuminate\Http\Response
     */
    public function destroy(UserHasBicosCategory $model)
    {
        $userHasBicosCategoryBO = new UserHasBicosCategoryBO();
        $this->data = $userHasBicosCategoryBO->destroy($model);
        $this->status = 200;
        $this->message = 'Dado deletado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao deletar o dado.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }
}
