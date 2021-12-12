<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supermercados extends Model
{
	protected $table = 'supermercado';
	protected $fillable = [
		'nombres',
	];
}
