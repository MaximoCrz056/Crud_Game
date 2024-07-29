<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
<<<<<<< HEAD:app/Models/accesorio.php
 * Los modelos siempre van con Mayusculaaaaaaaaass
=======
 * Los modelos siempre van con Mayusculaaaaaaaaassssss
>>>>>>> 62a32f3d949966537ce0d41dbcdff84107b186e3:app/Models/Accesorio.php
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
