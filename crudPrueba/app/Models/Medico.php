<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medico
 *
 * @property $idMedico
 * @property $idEstablecimiento
 * @property $nombreMedico
 * @property $created_at
 * @property $updated_at
 *
 * @property Establecimiento $establecimiento
 * @property Recetamedica[] $recetamedicas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medico extends Model
{
    
    static $rules = [
		'idMedico' => 'required',
		'idEstablecimiento' => 'required',
		'nombreMedico' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idMedico','idEstablecimiento','nombreMedico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function establecimiento()
    {
        return $this->hasOne('App\Models\Establecimiento', 'idEstablecimiento', 'idEstablecimiento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recetamedicas()
    {
        return $this->hasMany('App\Models\Recetamedica', 'idMedico', 'idMedico');
    }
    

}
