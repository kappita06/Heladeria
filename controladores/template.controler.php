<?php

class ControladorPlantilla{

	/*=============================================
	LLAMAMOS LA PLANTILLA
	=============================================*/

	public static function plantilla(){

		include "vistas/template.php";

	}

	/*=============================================
	Traemos los estilos dinámicos de la plantilla
	=============================================*/

	static public  function ctrEstiloPlantilla(){
		$tabla = "templade";

		$respuesta = ModeloTemplade::mdlEstiloTemplade($tabla);

		return($respuesta);
	}

}