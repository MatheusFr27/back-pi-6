<?php

namespace App\Http\Controllers;

use App\BO\BicoHasBicoCategoryBO;
use App\Helpers\Helpers;
use App\Http\Requests\BicoHasBicoCategoryRequest;
use App\Models\BicoHasBicoCategory;

class BicoHasBicoCategoryController extends Controller
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
        $bicoHasBicoCategoryBO = new BicoHasBicoCategoryBO();
        $this->data = $bicoHasBicoCategoryBO->initialize();
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
        $bicoHasBicoCategoryBO = new BicoHasBicoCategoryBO();
        $this->data = $bicoHasBicoCategoryBO->findById($id);
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
     * @param    BicoHasBicoCategoryRequest  $request
     *
     * @return  \Illuminate\Http\Response
     */
    public function store(BicoHasBicoCategoryRequest $request)
    {
        $bicoHasBicoCategoryBO = new BicoHasBicoCategoryBO();
        $this->data = $bicoHasBicoCategoryBO->store($request);
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
     * @param    BicoHasBicoCategoryRequest  $request
     * @param    BicoHasBicoCategory  $model
     *
     * @return  \Illuminate\Http\Response
     */
    public function update(BicoHasBicoCategoryRequest $request, BicoHasBicoCategory $model)
    {
        $bicoHasBicoCategoryBO = new BicoHasBicoCategoryBO();
        $this->data = $bicoHasBicoCategoryBO->update($request, $model);
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
     * @param    BicoHasBicoCategory  $model
     * @return  \Illuminate\Http\Response
     */
    public function destroy(BicoHasBicoCategory $model)
    {
        $bicoHasBicoCategoryBO = new BicoHasBicoCategoryBO();
        $this->data = $bicoHasBicoCategoryBO->destroy($model);
        $this->status = 200;
        $this->message = 'Dado deletado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao deletar o dado.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }
}
