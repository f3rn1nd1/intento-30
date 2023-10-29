<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Postulante
 *
 * @property $id
 * @property $empresas_id
 * @property $user_rut
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Postulante extends Model
{
    
    static $rules = [
		'user_rut' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empresas_id','user_rut'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'empresas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'rut', 'user_rut');
    }
    

}
