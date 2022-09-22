namespace App\Repositories;

use App\Models\{{ $crudName }};

class {{ $crudName }}Repository extends GenericRepository {

    protected static function getClass() {
        return {{ $crudName }}::class;
    }

    protected static function getKeyName() {
        return {{ $crudName }}::getPrimaryKeyName();
    }

}
