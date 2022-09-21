namespace App\Repositories;

use App\Models\{{ $crudName }};

class {{ $crudName }}Repository extends GenericRepository {

    protected function getClass() {
        return {{ $crudName }}::class;
    }

    protected function getKeyName() {
        return {{ $crudName }}::getPrimaryKeyName();
    }

}
