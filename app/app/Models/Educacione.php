<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Educacione
 *
 * @property $id
 * @property $user_rut
 * @property $titulo
 * @property $tipo_estudio
 * @property $universidad
 * @property $fecha_obtencion
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Educacione extends Model
{
    
    static $rules = [
		'user_rut' => 'required',
		'titulo' => 'required',
		'tipo_estudio' => 'required',
		'universidad' => 'required',
		'fecha_obtencion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_rut','titulo','tipo_estudio','universidad','fecha_obtencion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'rut', 'user_rut');
    }
    

}
