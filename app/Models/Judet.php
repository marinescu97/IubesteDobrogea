<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert(string[] $array)
 * @method static where(string $string, $judet)
 * @method static get()
 * @method static join(string $string, string $string1, string $string2, string $string3)
 */
class Judet extends Model
{
	protected $table = 'judet';
     protected $fillable = [
     'nume'
   ];
}
