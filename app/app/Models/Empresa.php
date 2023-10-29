<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombre_empresa
 * @property $puesto
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Postulante[] $postulantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombre_empresa' => 'required',
		'puesto' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_empresa','puesto','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postulantes()
    {
        return $this->hasMany('App\Models\Postulante', 'empresas_id', 'id');
    }
    

}
