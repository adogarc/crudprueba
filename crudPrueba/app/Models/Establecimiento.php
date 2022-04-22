<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Establecimiento
 *
 * @property $idEstablecimiento
 * @property $nombreEstablecimiento
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Medico[] $medicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Establecimiento extends Model
{
    
    static $rules = [
		'idEstablecimiento' => 'required',
		'nombreEstablecimiento' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEstablecimiento','nombreEstablecimiento','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicos()
    {
        return $this->hasMany('App\Models\Medico', 'idEstablecimiento', 'idEstablecimiento');
    }
    

}
