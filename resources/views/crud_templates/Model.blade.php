namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class {{ $crudName }} extends Model
{
    use Uuid;

    protected $table = '{{ $tableName }}';
    protected $keyType = 'string';
    // protected $incrementing = false;
    // protected $primaryKey = '';
    // protected $timestamps = false;

    protected $fillable = [
        // 'id'
    ];

    protected $attributes = [
        // 'is_dev' => false,
    ];
}
