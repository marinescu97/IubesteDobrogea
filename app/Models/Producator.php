<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @method static insert(array $array)
 * @method static where(string $string, $producator)
 * @method static find($id)
 * @method static create(array $array)
 * @method static get()
 * @method static paginate(int $int)
 * @property mixed $parola
 * @property mixed $admin
 */
class Producator extends Authenticatable
{
    use Notifiable;

    protected $table = 'producator';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nume', 'prenume' ,'email', 'telefon' , 'adresa' , 'judet', 'localitate', 'parola','admin', 'descriere', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'parola',
    ];
    protected $appends = ['admin'];

    public function getAuthPassword()
    {
      return $this->parola;
    }

    public function judet(): BelongsTo
    {
        return $this->belongsTo('App\Judet');
    }
    public function localitate(): BelongsTo
    {
        return $this->belongsTo('App\Localitate');
    }
    public function produse(): HasMany
    {
        return $this->hasMany('App\Produs');
    }
}
