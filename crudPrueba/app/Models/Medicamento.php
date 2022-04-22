<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicamento
 *
 * @property $idMedicamento
 * @property $nombreMedicamento
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Detallerecetum[] $detallerecetas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicamento extends Model
{
    
    static $rules = [
		'idMedicamento' => 'required',
		'nombreMedicamento' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idMedicamento','nombreMedicamento','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallerecetas()
    {
        return $this->hasMany('App\Models\Detallerecetum', 'idMedicamento', 'idMedicamento');
    }
    

}
