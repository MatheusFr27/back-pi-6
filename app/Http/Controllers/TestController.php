<?php

namespace App\Http\Controllers;

use App\BO\TestBO;
use App\Helpers\Helpers;
use App\Http\Requests\TestRequest;
use App\Models\Test;

class TestController extends Controller
{

    private $data;
    private $status;
    private $message;

    /**
     * Retorna todos os dados.
     *
     * @return \Illuminate\Http\Response
     */
    public function initialize()
    {
        $testBO = new TestBO();
        $this->data = $testBO->initialize();
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
     * @param  string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function findById(string $id)
    {
        $testBO = new TestBO();
        $this->data = $testBO->findById($id);
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
     * @param  TestRequest  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(TestRequest $request)
    {
        $testBO = new TestBO();
        $this->data = $testBO->store($request);
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
     * @param  TestRequest  $request
     * @param  Test  $model
     *
     * @return \Illuminate\Http\Response
     */
    public function update(TestRequest $request, Test $model)
    {
        $testBO = new TestBO();
        $this->data = $testBO->update($request, $model);
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
     * @param  Test  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $model)
    {
        $testBO = new TestBO();
        $this->data = $testBO->destroy($model);
        $this->status = 200;
        $this->message = 'Dado deletado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao deletar o dado.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }
}
