<?php

	namespace SebasLaravelInicial\Http\Controllers;

	use SebasLaravelInicial\Http\Controllers\Controller;
	
	class PruebaController extends Controller{

		public function prueba($param){
			return "Estoy debtro de un controlador de prueba ".$param;
		}

	}
