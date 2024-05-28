<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static where(string $string, $id)
 * @method static insert(array $array)
 */
class Anunt extends Model
{
    protected $table = 'anunt_eveniment';
    protected $fillable = [
        'anunt' , 'imagini' ,'producator', 'eveniment'
    ];
    public function producator(): BelongsTo
    {
        return $this->belongsTo('App\Producator');
    }
}
