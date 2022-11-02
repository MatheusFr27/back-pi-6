namespace App\BO;

use App\Models\{{ $crudName }};
use App\Repositories\{{ $crudName }}Repository;
use Illuminate\Database\Eloquent\Collection;

class {{ $crudName }}BO
{

    /**
     * Retorna todos os dados do banco de dados.
     *
     * @return Collection
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function initialize(): ?Collection
    {
        $result = {{ $crudName }}Repository::initialize();

        return $result;
    }

    /**
     * Busca por um dado em especifico atraves do id.
     *
     * @param string $id
     *
     * @return object
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function findById(string $id): ?object
    {
        $result = {{ $crudName }}Repository::findById($id);

        return $result;
    }

    /**
     * Persiste o dado no banco de dados.
     *
     * @param {{ $crudName }}Request $request
     *
     * @return object
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function store($request): ?object
    {
        $result = {{ $crudName }}Repository::store($request);

        return $result;
    }

    /**
     * Atualiza um dado especifico e retorna bool como resultado.
     *
     * @param {{ $crudName }}Request $request
     * @param {{ $crudName }} $model
     *
     * @return bool
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function update($request, $model): bool
    {
        $result = {{ $crudName }}Repository::update($request, $model);

        return $result;
    }

    /**
     * Deleta o dado especifico no banco de dados.
     *
     * @param {{ $crudName }} $model
     *
     * @return bool
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
    */
    public function destroy($model): bool
    {
        $result = {{ $crudName }}Repository::destroy($model);

        return $result;
    }
}
