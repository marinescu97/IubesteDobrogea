<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert(string[] $array)
 * @method static get()
 * @method static join(string $string, string $string1, string $string2, string $string3)
 */
class CategorieProdus extends Model
{
    protected $table = 'categorie_produs';
    protected $fillable = [
     'nume'
   ];
}
