<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static get()
 * @method static where(string $string, $id)
 */
class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
     'nume','prenume','email','mesaj','data'
   ];
}
