<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static insert(string[] $array)
 * @method static orderBy(string $string, string $string1)
 * @method static where(string $string, $id)
 * @method static find($id)
 * @method static create(array $array)
 * @method static get()
 * @method static join(string $string, string $string1, string $string2, string $string3)
 * @method static findOrFail($id)
 * @property mixed $imagini
 */
class Produs extends Model
{
    protected $table = 'produs';
    protected $fillable = [
     'categorie', 'denumire', 'descriere', 'producator', 'imagini'
   ];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo('App\CategorieProdus','App\Producator');
    }
}
