namespace App\Http\Controllers;

use App\BO\{{ $crudName }}BO;
use App\Helpers\Helpers;
use App\Http\Requests\{{ $crudName }}Request;
use App\Models\{{ $crudName }};

class {{ $crudName }}Controller extends Controller
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
        ${{ $crudNameCamelCase }}BO = new {{ $crudName }}BO();
        $this->data = ${{ $crudNameCamelCase }}BO->initialize();
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
        ${{ $crudNameCamelCase }}BO = new {{ $crudName }}BO();
        $this->data = ${{ $crudNameCamelCase }}BO->findById($id);
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
     * @param  {{ $crudName }}Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store({{ $crudName }}Request $request)
    {
        ${{ $crudNameCamelCase }}BO = new {{ $crudName }}BO();
        $this->data = ${{ $crudNameCamelCase }}BO->store($request);
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
     * @param  {{ $crudName }}Request  $request
     * @param  {{ $crudName }}  $model
     *
     * @return \Illuminate\Http\Response
     */
    public function update({{ $crudName }}Request $request, {{ $crudName }} $model)
    {
        ${{ $crudNameCamelCase }}BO = new {{ $crudName }}BO();
        $this->data = ${{ $crudNameCamelCase }}BO->update($request, $model);
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
     * @param  {{ $crudName }}  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy({{ $crudName }} $model)
    {
        ${{ $crudNameCamelCase }}BO = new {{ $crudName }}BO();
        $this->data = ${{ $crudNameCamelCase }}BO->destroy($model);
        $this->status = 200;
        $this->message = 'Dado deletado com sucesso.';

        if (!$this->data) {
            $this->status = 500;
            $this->message = 'Houve um erro ao deletar o dado.';
        }

        return Helpers::response($this->data, $this->status, $this->message);
    }
}
