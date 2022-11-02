<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class GenericRepository
{

    /**
     * Pega o modelo atual.
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    protected static function getCalledClass()
    {
        return get_called_class()::getClass();
    }

    /**
     * Pega a chave de identificação única da tabela atual.
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    protected static function getPrimaryKeyName()
    {
        return get_called_class()::getKeyName();
    }

    /**
     * Busca por todos os dados da tabela que realizou o acionamento.
     *
     * @return Collection
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public static function initialize(): ?Collection
    {
        return self::getCalledClass()::get();
    }

    /**
     * Busca por determinado dado através do id.
     *
     * @param string $id
     *
     * @return Model
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public static function findById(string $id): ?Model
    {
        return self::getCalledClass()::where(self::getPrimaryKeyName(), $id)->first();
    }

    /**
     * Busca por todos os dados da tabela e retorna somente as colunas desejadas. Também é possivel passar uma validação
     *
     * @param array $columns
     * @example - `['id', 'nome']`
     *
     * @param array $validate
     * @example - `[['status', 'A']] ou [['status', 'A'], ['id', 1]]`
     *
     * @return Collection
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public static function getByColumns(array $columns, array $validate = null): ?Collection
    {
        return self::getCalledClass()::where($validate)->select($columns)->get();
    }

    /**
     * Atualiza ou cria um novo dado.
     *
     * @param array $validate
     * @example - `['departure' => 'Oakland', 'destination' => 'San Diego']`
     *
     * @param array $columns
     * @example - `['price' => 99, 'discounted' => 1]`
     *
     * @return Model
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public static function updateOrCreate(array $validate, array $columns): ?Model
    {
        return self::getCalledClass()::updateOrCreate($validate, $columns);
    }

    /**
     * Cria um novo dado.
     *
     * @param array $arrayData
     * @example - `['nome' => 'Matheus', 'last_name' => 'França']`
     *
     * @return Model
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public static function store(array $arrayData): ?Model
    {
        return self::getCalledClass()::create($arrayData);
    }

    /**
     * Atualiza o dado.
     *
     * @param array $arrayData
     * @example - `['nome' => 'João', 'last_name' => 'Silva']`
     *
     * @param Model $model
     *
     * @return bool
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public static function update(array $arrayData, Model $model): bool
    {
        return $model->update($arrayData);
    }

    /**
     * Deleta o dado.
     *
     * @param Model $model
     *
     * @return bool
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public static function destroy($model): bool
    {
        return $model->delete();
    }
}
