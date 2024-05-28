<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert(string[] $array)
 * @method static where(string $string, $id)
 * @method static skip(int $skip)
 */
class DetaliiEveniment extends Model
{
    protected $table = 'detalii_eveniment';
    protected $fillable = [
        'imagine', 'descriere', 'eveniment',
    ];
}
