<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCREAM </title>

    <?php

		$url = Ruta::ctrRuta();

	?>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="vistas/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="vistas/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vistas/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="vistas/css/style.css" rel="stylesheet">
</head>

<body>

<?php

/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";

// Contenido dinámico
$rutas = array();
$ruta = null;
if(isset($_GET["ruta"])){
	$rutas = explode("/",$_GET["ruta"]);
	$item = "ruta";
	$valor = $rutas[0];

// Url Amigables de Categorias
	$rutaCategorias = ControladorCategorias::ctrMostrarCategorias($item,$valor);
	if($rutaCategorias && $rutas[0] == $rutaCategorias["ruta"]){
		$ruta = $rutas[0];
	}
//Url Amigable de SubCategorias
$rutaSubCategorias = ControladorCategorias::ctrMostrarSubCategorias($item, $valor);
if(is_array($rutaSubCategorias)){
	foreach($rutaSubCategorias as $key => $value){
		if($rutas[0] == $value["ruta"]){
			$ruta = $rutas[0];
		}
	}
}

	// Lista Blancas de Url Amigables
	if($ruta != null){
		include "modulos/productos.php";
	}else{
		include "modulos/error404.php";
	}

}

?>


<script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="vistas/lib/easing/easing.min.js"></script>
    <script src="vistas/lib/waypoints/waypoints.min.js"></script>
    <script src="vistas/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="vistas/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="vistas/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="vistas/mail/jqBootstrapValidation.min.js"></script>
    <script src="vistas/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="vistas/js/main.js"></script>
</body>

</html>