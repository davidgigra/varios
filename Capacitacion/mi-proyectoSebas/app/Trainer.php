<?php

namespace SebasLaravelInicial;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

	protected $fillable = ['nombre', 'descripcion', 'slug', 'avatar']; 
	/**
		* Get the route key for the model.
		*
		* @return string
	*/
	public function getRouteKeyName()
	{
		return 'slug';
	}

}