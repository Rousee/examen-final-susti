<!DOCTYPE html>
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
<form method="post" action="procesar.php">
  <div class="">
	<div style="margin-top: 10px">
		<label>nombre</label>
		<input value="" type="text" name="nombre"/>
	</div>
	<div style="margin-top: 10px">
		<label>Apellidos</label>
		<input value="" type="text" name="apellido"/>
	</div>
	<div style="margin-top: 10px">
		<label>Grados</label>
		<select name="grado">
			<option value="1">Doctor</option>
			<option value="2">Maestro</option>
			<option value="3">Titulado</option>
		</select>
	</div>
	<div style="margin-top: 10px">
		<label>Numero de Articulos</label>
		<input value="" type="text" name="articulos"/>
	</div>
	<div style="margin-top: 10px">
		<label>Numero de libros</label>
		<input value="" type="text" name="libros"/>
	</div>
	<div style="margin-top: 10px">
		<label>Numero de proyectos</label>
		<input value="" type="text" name="proyectos"/>
	</div>
	<div style="margin-top: 10px">
		<label>Numero de asesorias</label>
		<input value="" type="text" name="asesorias"/>
	</div>
	<div style="margin-top: 10px">
		<input value="Procesar" type="submit"/>
	</div>
  </div>
</form>
</header>
<section class="top-logo">

</section>
<footer>
</footer>
</body>
</html>

