<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Renta
 *
 * @property $id
 * @property $tiempo
 * @property $pagoTotal
 * @property $horaInicio
 * @property $horaTermino
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Renta extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['tiempo', 'pagoTotal', 'horaInicio', 'horaTermino'];


}
