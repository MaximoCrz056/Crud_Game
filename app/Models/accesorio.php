<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Los modelos siempre van con Mayusculaaaaaaaaass
 * Class Accesorio
 *
 * @property $id
 * @property $tipo
 * @property $modelo
 * @property $marca
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Accesorio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['tipo', 'modelo', 'marca'];


}
