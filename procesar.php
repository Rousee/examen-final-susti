<!DOCTYPE html>
<?php
	$grado=$_POST['grado'];
	$articulos=$_POST['articulos'];
	$asesorias=$_POST['asesorias'];
	$proyectos=$_POST['proyectos'];
	$libros=$_POST['libros'];
	$respuesta="";
	if(($grado==1 || $grado==2) && $articulos>10 && $libros>2 && $proyectos>2 && $asesorias>4){
		$respuesta="Nivel 3";
	}else{
		if(($grado==1 || $grado==2)  && $articulos>6 && $libros>1 && $proyectos>1 && $asesorias>2 ){
			$respuesta="Nivel 2";
		}else{
			if($grado==3 && $articulos>3 && $libros>0 && $proyectos>1 && $asesorias>0 ){
				$respuesta="Nivel 1";
			}else{
				$respuesta="No tiene nivel";
			}
		}
	}
	
	

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mi Primer Formulario</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/" rel="stylesheet" media="screen">
	<script src="js/"></script> 
</head>

<body>
<header>

  <div class="">
	<?php echo "Respuesta:".$respuesta; ?>
  </div>

</header>
<section class="top-logo">

</section>
<footer>
</footer>
</body>
</html>

