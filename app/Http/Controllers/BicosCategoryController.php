<?php

namespace App\Http\Controllers;

use App\BO\BicosCategoryBO;
use App\Helpers\Helpers;
use App\Http\Requests\BicosCategoryRequest;
use App\Models\BicosCategory;

class BicosCategoryController extends Controller
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
        $bicosCategoryBO = new BicosCategoryBO();
        $this->data = $bicosCategoryBO->initialize();
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
        $bicosCategoryBO = new BicosCategoryBO();
        $this->data = $bicosCategoryBO->findById($id);
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
     * @param    BicosCategoryRequest  $request
     *
     * @return  \Illuminate\Http\Response
     */
    public function store(BicosCategoryRequest $request)
    {
        $bicosCategoryBO = new BicosCategoryBO();
        $this->data = $bicosCategoryBO->store($request);
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
     * @param    BicosCategoryRequest  $request
     * @param    BicosCategory  $model
     *
     * @return  \Illuminate\Http\Response
     */
    public function update(BicosCategoryRequest $request, BicosCategory $model)
    {
        $bicosCategoryBO = new BicosCategoryBO();
        $this->data = $bicosCategoryBO->update($request, $model);
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
     * @param    BicosCategory  $model
     * @return  \Illuminate\Http\Response
     */
    public function destroy(BicosCategory $model)
    {
        $bicosCategoryBO = new BicosCategoryBO();
        $this->data = $bicosCategoryBO->destroy($model);
        $this->status = 200;
        $this->message = 'Dado deletado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao deletar o dado.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }
}
