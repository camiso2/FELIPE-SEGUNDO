<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{

  protected $table = 'participants';
    protected $fillable = [
		
        'nombres',
        'apellidos',
        'telefono',
        'email',
        'nacimiento',
        'supermercado',
        'recibo',
        'code',
        'fper',
	];
	/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];
}
