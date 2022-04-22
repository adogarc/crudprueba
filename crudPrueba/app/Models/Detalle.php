<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalle
 *
 * @property $idDetalle
 * @property $idReceta
 * @property $idMedicamento
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicamento $medicamento
 * @property Receta $receta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalle extends Model
{
    
    static $rules = [
		'idDetalle' => 'required',
		'idReceta' => 'required',
		'idMedicamento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idDetalle','idReceta','idMedicamento','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medicamento()
    {
        return $this->hasOne('App\Models\Medicamento', 'idMedicamento', 'idMedicamento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function receta()
    {
        return $this->hasOne('App\Models\Receta', 'idReceta', 'idReceta');
    }
    

}
