namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class {{ $crudName }} extends Model
{
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
