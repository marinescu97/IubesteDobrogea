<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static insert(string[] $array)
 * @method static where(string $string, $localitate)
 */
class Localitate extends Model
{
    protected $table = 'localitate';
    protected $fillable = [
     'nume', 'judet'
   ];

    public function judet(): BelongsTo
    {
        return $this->belongsTo('App\Judet');
    }
}
