<?php

namespace App\Http\Controllers;

use App\BO\BicoBO;
use App\Helpers\Helpers;
use App\Http\Requests\BicoRequest;
use App\Models\Bico;

class BicoController extends Controller
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
        $bicoBO = new BicoBO();
        $this->data = $bicoBO->initialize();
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
        $bicoBO = new BicoBO();
        $this->data = $bicoBO->findById($id);
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
     * @param    BicoRequest  $request
     *
     * @return  \Illuminate\Http\Response
     */
    public function store(BicoRequest $request)
    {
        $bicoBO = new BicoBO();
        $this->data = $bicoBO->store($request);
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
     * @param    BicoRequest  $request
     * @param    Bico  $model
     *
     * @return  \Illuminate\Http\Response
     */
    public function update(BicoRequest $request, Bico $model)
    {
        $bicoBO = new BicoBO();
        $this->data = $bicoBO->update($request, $model);
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
     * @param    Bico  $model
     * @return  \Illuminate\Http\Response
     */
    public function destroy(Bico $model)
    {
        $bicoBO = new BicoBO();
        $this->data = $bicoBO->destroy($model);
        $this->status = 200;
        $this->message = 'Dado deletado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao deletar o dado.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }
}
