<?php

namespace App\Http\Controllers;

use App\BO\OfferBicosBO;
use App\Helpers\Helpers;
use App\Http\Requests\OfferBicosRequest;
use App\Models\OfferBicos;

class OfferBicosController extends Controller
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
        $offerBicosBO = new OfferBicosBO();
        $this->data = $offerBicosBO->initialize();
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
        $offerBicosBO = new OfferBicosBO();
        $this->data = $offerBicosBO->findById($id);
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
     * @param    OfferBicosRequest  $request
     *
     * @return  \Illuminate\Http\Response
     */
    public function store(OfferBicosRequest $request)
    {
        $offerBicosBO = new OfferBicosBO();
        $this->data = $offerBicosBO->store($request);
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
     * @param    OfferBicosRequest  $request
     * @param    OfferBicos  $model
     *
     * @return  \Illuminate\Http\Response
     */
    public function update(OfferBicosRequest $request, OfferBicos $model)
    {
        $offerBicosBO = new OfferBicosBO();
        $this->data = $offerBicosBO->update($request, $model);
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
     * @param    OfferBicos  $model
     * @return  \Illuminate\Http\Response
     */
    public function destroy(OfferBicos $model)
    {
        $offerBicosBO = new OfferBicosBO();
        $this->data = $offerBicosBO->destroy($model);
        $this->status = 200;
        $this->message = 'Dado deletado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao deletar o dado.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }
}
