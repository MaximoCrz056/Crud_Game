<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consola
 *
 * @property $id
 * @property $almacenamiento
 * @property $disponibilidad
 * @property $modelo
 * @property $marca
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consola extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['almacenamiento', 'disponibilidad', 'modelo', 'marca'];


}
