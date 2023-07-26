<!--PHP-->
<?php
# Aca se reciben los datos cargados
require "datosbd.php";    # esto contiene las variables de este archivo
    $nombre=$_POST ['nombre'];
    $apellido=$_POST ['apellido'];
    $dni=$_POST['dni'];
    $edad=$_POST ['edad'];
    $email=$_POST ['email'];
    $contra=$_POST['contra'];
# El echo muestra la salida por pantalla de los datos
    #echo "el nombre es: $nombre y el apellido es $apellido;    $dni ;  $edad ;   $contra <br><br>"; 
    
# Esta variable genera la conecion y se pasan los siguientes parametros se pueden pasar 3 o 4 ($servidorBD,$usuarioBD,$contraseñaBD,$nombreBD(este ultimo es opcional solo si tengo muchas bD))
$conn=mysqli_connect($servidorBD,$usuarioBD,$contraBD,$nombreBD) or die("No se pudo conectar");
# En caso de conectame con una base de datos individualmente.
#mysqli_select_db($conn,$nombreBD) or die ("No se estblecio coneccion");

# Colocar la sentencia insert para ir guardando los cambios
$sql="insert into alumnos(nombre,apellido,dni,edad,email,contra) 
values('$nombre','$apellido','$dni','$edad','$email','$contra');"; 

#muestra el resultado de la connexion y el insert de sql y es opcional puede o no estar.
$resulset=mysqli_query($conn,$sql);
#muestra mensaje de que cago el usuario
if (mysqli_affected_rows($conn)>0){
    echo "<b>usuario $nombre $apellido cargado con exito!!!</b>";
}
else{
    echo "<i>No se pudo cargar el usuario!!!</i> <br>";
}
#--------------------------------------------------------------------------------------------
#selecciona o trae los datos de la tabla seleccionada.
$sql2="Select * from alumnos";
#hace la consulta y la vuelca a la variable $resulset2 y muestra los datos de la tabla seleccionada
$resulset2=mysqli_query($conn,$sql2);

#while mysqli_fech_row = aca se indexara la fila con la posicion del array 

/*while($fila=mysqli_fetch_row($resulset2)){
    echo $fila[0]." ".$fila[1]." ".$fila[2]." ".$fila[3]." ".$fila[4]." ".$fila[5]."<br>";
}*/
/*while ($fila=mysqli_fetch_assoc($resulset2))
{ 
echo  $fila['nombre']." ".$fila['apellido']." ".$fila['dni']." ".$fila['edad']." ".$fila['email']." ".$fila['contra']."<br>";
}*/

?>


<!--html--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="algoritmosprueba/styles.css">
    <title>tablas</title>
    
</head>

<body>
    <h1>Tablas para formulario</h1>
    <table>
    <tr> <th>Nombre</th><th>Apellido</th><th>dni</th><th>Edad</th><th>email</th> <th>contraseña</th></tr>

    <?php
    //entra en el bucle while los datos que va a revisar.
    while ($fila=mysqli_fetch_assoc($resulset2))
    { 
    //echo  $fila['nombre']." ".$fila['apellido']." ".$fila['dni']." ".$fila['edad']." ".$fila['email']." ".$fila['contra']."<br>";
    ?>
    <!--esto muestra las variables que trae del archivo algoritmos.php-->
    <!--<tr>
        <td><?php #echo $nombre; ?></td>
        <td><?php #echo $apellido; ?></td>
        <td><?php #echo $dni; ?></td>
        <td><?php #echo $edad; ?></td>
        <td><?php #echo $email; ?> </td>
        <td><?php #echo $contra; ?></td>
    </tr>-->
    <tr>
        <td><?php echo $fila ['nombre']; ?></td>
        <td><?php echo $fila ['apellido']; ?></td>
        <td><?php echo $fila ['dni']; ?></td>
        <td><?php echo $fila ['edad']; ?></td>
        <td><?php echo $fila ['email']; ?> </td>
        <td><?php echo $fila ['contra']; ?></td>
    </tr>
    
    <?php
    }
    ?>
    </table>    
    
</body>
</html>