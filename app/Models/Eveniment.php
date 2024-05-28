<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert(string[] $array)
 * @method static find($id)
 * @method static select(string $string, $raw, $raw1)
 * @method static paginate(int $int)
 * @method static get()
 * @method static where(string $string, $id)
 * @property mixed $id
 * @property mixed $titlu
 * @property mixed $data
 * @property mixed $ora
 * @property mixed $judet
 * @property mixed $localitate
 */
class Eveniment extends Model
{
    protected $table = 'eveniment';
    protected $fillable = [
        'titlu', 'data', 'ora',
    ];
}
