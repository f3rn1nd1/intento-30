<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Idioma
 *
 * @property $id
 * @property $idioma
 * @property $nivel_escrito
 * @property $nivel_oral
 * @property $user_rut
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Idioma extends Model
{
    
    static $rules = [
		'idioma' => 'required',
		'nivel_escrito' => 'required',
		'nivel_oral' => 'required',
		'user_rut' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idioma','nivel_escrito','nivel_oral','user_rut'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'rut', 'user_rut');
    }
    

}
