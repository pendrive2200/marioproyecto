<?php 
$dni=$_POST['dni'];
$pass=$_POST['contra'];
// conecto con la base de datos
require "datosbd.php";
// hago la conexion 
$con=mysqli_connect($servidorBD,$usuarioBD,$contraBD,$nombreBD) or die ("nose puede conectar con la base de datos");
//consulta
$sqllogeo= "select * from empleados where usuario=$usuarioBD;";
$resulset=mysqli_query($con,$sqllogeo);
$registro=mysqli_affected_rows($resulset);
if(mysqli_affected_rows($con)>0){
	//$nombre= $registro['']
	if ($registro['contra']==$pass){
		echo "inicia sesion";
	}
	else {
		echo "La contraseña es incorrecta";
		}
}
else{
	echo "no existe el ususario $nombreBD";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>logeo</title>
	<link rel="shortcut icon" href="Fotos//logolink-removebg-preview.png">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>logeo de usuario</h1>
<header>
	<div>
		<img src="fotos/logolink">
		<main>
			<ul>
				<li>inicio</li>
				<li>contactos</li>
				<li>preguntas frecuentes</li>
				<li>mis datos</li>
			</ul>
		</main>
	</div>	
</header>

<div class="opciones">
	<h1 class="logeopc">CENTROS VACUNATORIOS</h1><br>
	<br>
	<select>
		<option>Avellaneda</option>
		<option>Berazategui</option>
		<option>Bernal</option>
		<option>Sarandi</option>
		<option>Palermo</option>
	</select><br>
	<br>
	<h1 class=vacunas>Mis Vacunas</h1>
	<h2>Vacunas</h2>
	<select>
		<option>Pfizer</option>
		<option>Moderna</option>
		<option>Astrazeneca</option>
		<option>Sputnik V</option>
		<option>Convidencia</option>
	</select>

	<h2>Dosis</h2>
	<select><option>1°</option><option>2°</option><option>3°</option><option>4</option><option>5</option></select><br>
	<br>
<div>

<input type="submit" value="Solicitar Turnos">
<input type="submit"  value="Modificar turnos">
<input type="submit" value="Cancelar Turno">

</body>
</html>