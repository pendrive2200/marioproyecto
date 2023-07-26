<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Fotos//logolink-removebg-preview.png">
    <link rel="stylesheet" href= "estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Centro Asclepio</title>
</head>

<body>
    <!--inicion header-->
    <header>
        <!--poner foto de serpiente-->
        <div class="seccion1">
            <h1 class="titulo1"> Centro Vacunatorio Asclepio</h1>
            <nav class="navegacion">
                <ul class="menu">
                    <li class="inicio"><a href="#index.html">Inicio</a></li>
                    <li class="contacto"><a href="#contactos">Contactos</a></li>
                    <li class="preguntas"><a href="#index.html">Preguntas Frecuentes</a></li>
                </ul>
            </nav>
            <div class="login">
                <label class="label1" for="dni">DNI</label>
                <input class="cajas" type="number" name="Dni" placeholder="34567890">
                <label class="label1" for="contra">Clave</label>
                <input class="cajas" type="password" name="contra"  placeholder="Contraseña">
                
                <input class="botonIngresar" type="submit" value="ingresar"><br>
                <a class="renovacioncontra" href="renovarcontra.html">¿olvidaste la contraseña?</a><br>
                <!-- <p class="parrafo4">¿no tenes cuenta?</p> -->
                <input class="registrate" type="submit" value="registrate">
            </div>
            
        </div>
        <div class="informacion">
            <img class="imagen2" src="fotos//foto6-removebg-preview.png" alt="amigitos" >
            <img class="imagen1" src="Fotos/foto12-r.png" alt="logo empresa" >
            <!-- la etiqueta <mark> resalta lo que queremos y <em> da el enfasis -->
            <p class="parrafo2"><mark><em><strong>¿importancia de la vacunación?</strong></em></mark></p> 
            <p class="parrafo2a">La vacunación es una forma sencilla inocua y eficaz de protegernos contra enfermedades dañinas antes de entrar en contacto con ellas.
            Las vacunas activan las defensan naturales del organismo para que aprendan a resistir a infecciones especificas, y foratelcen el sistema inmunitario. 
            </p><br>
            
        </div>
    </header>
    <!--Fin del header-->

    <div id="seccion2">
        <div class="parrafoPrincipal">
        <p class="parrafo5"><mark> si necesita turno puede realizarlo desde esta web:</mark></p>
        <a  class="link"  href="http://asclepio.turnos.com/usuarios/index.php?id_empresa=100"><mark>//asclepio.turnos.com/usuarios/index.php?id_empresa=100</mark></a><br>
        </div>
        <br>
        <div class="fotForm">
        <img class="imagen3" src="fotos/cartel de centro de vacunacion.jpg" alt="Centro vacuancion" width="200px" ><!--convertir a png-->
        <img  class="imagen4" src="fotos/familia.jpg" alt="famila" width="200"><!--convertir a png-->
        
        </div>
        <br>
        <div class="form1">
        <form class="formulario">
            <fieldset class="recuadro"><!--Recuadra el formulario-->
                <!--<legend>Escribinos</legend>-->
                <p class="parrafo10">Escribinos</p>
                <p class="parrafo11">Dudas,concultas,sugerencias</p>
                <input class="cajaform" type="text" name="nombre" placeholder="ingrese su nombre"><br>
                <br>
                <input class="cajaform"  type="email" name="email" placeholder="ingrese su mail"><br>
                <br>
                <input class="cajaform" type="number" name="dni" placeholder="ingrese su documento"><br>
                <br>
                <input class="cajaform" type="number" name="telefono" placeholder="ingrese su telefono"><br>
                <br>
                <textarea class="consulta"  rows="8" cols="21" placeholder="detalle su consulta o comentario"></textarea><br>
                <input class="botonform" type="submit" value="Enviar mensaje">
            </fieldset>
        </form>
        </div>
        
        <div class="opciones">
            <div class="estudiosMedicos">
                <i class="fa-solid fa-stethoscope"></i>
                <p class="parrafo6">estudios medicos</p>
                <p class="parrafo6a">conoce la amplia variedad de estudios que realizamos</p><br>
                <input class="botoninformacion" type="button" value="mas informacion">
            </div><br>
            <div class="laboratorio">
                <i class="fa-solid fa-vial"></i>
                <p class="parrafo7">Laboratorio</p>
                <p class="parrafo7a">Un estandar de calidad internacionalmente reconociado</p><br>
                <input  class="botoninformacion"  type="button" value="mas informacion"> 
            </div><br>
            <div class="chequeosPreventivos">
                <i class="fa-solid fa-user-doctor"></i>
                <p class="parrafo8">Chequeos preventivos</p>
                <p class="parrafo8a">La manera mas facil de optener tu apto fisico</p><br>
                <input class="botoninformacion" type="button" value="mas informacion"> 
            </div><br>
            <div class="consultoriosMedicos">
                <i class="fa-solid fa-hospital"></i><br>
                <p class="parrafo9">Descubri nuestras especialidades medicas</p><br>
                <br>
                <input class="botoninformacion" class="info" type="button" value="mas informacion"> 
            </div><br>
        </div>
        
    </div>
    
    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52547.90975775415!2d-58.5087879448295!3d-34.59798193191272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca0c687ee0b7%3A0x879b67a1fd77fb98!2sVilla%20Crespo%2C%20CABA!5e0!3m2!1ses!2sar!4v1661490360237!5m2!1ses!2sar" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- <video  class="video" src="videos/Libertad, Argentina produce la vacuna.mp4" controls="" preload="auto" autoplay></video> -->
    <!--formulario-->
    
<!--Termina primer formulario-->
    <hr class="lineaDeseparacion"><!--separa secciones-->
    <form action="recibe.php" method="Post" id="registracion" target="blank"><!--dividir las secciones-->
        <h2 id="titulo2">Registración</h2>
        <!--fijarme como cambio a img para subir foto-->
        <i id="usuario" class="fa-solid fa-circle-user"></i><!--el icono se agranda porque es palabra osea codigo y no img-->
        <!-- <form class="formulario2"><br> -->
            <label class="regisNombre" for="nombre">Nombre</label>
            <input class="cajaNombre" type="text" name="nombre" title="ponerNombre"><br>
            
            <label class="regisApellido" for="apellido">Apellido</label>
            <input class="cajaApellido" type="text" name="apellido"><br>
            
            <label class="regisDni" for="dni">dni</label>
            <input class="cajaDni" type="number" name="dni"><br>
            
            <label class="regisTramite" for="nºtramite">Nº Tramite</label>
            <input class="cajaTramite" type="number" name="tramite"><br>
            
            <label class="regisMail" for="email">Mail</label>
            <input class="cajaMail" type="email" name="email" placeholder="vacuna@gmail.com"><br>
            
            <label class="regisTelefono" for="telefono">Telefono/Celular</label>
            <input class="cajaTelefono" type="number" name="telefono" title="telefono"><br>
            
            <label class="regisDireccion" for="direccion">Dirección</label>
            <input class="cajaDireccion" type="text" name="direccion" title="direccion"><br>
            
            <label class="regisNacimiento" for="fechaDenacimineto">Fecha Nacimiento</label>
            <input class="cajaNacimiento" class="cajas1" type="date" name="fechaDenacimineto" title="fechaNacimieto"><br>
            
            <label class="regisLocalidad" for="localidad">Localidad</label>
            <select class="comboLocalidad" name="localidad"  title="comboboxLocalidad"><!--combobox arreglar alfabeticamente-->
                <option value="ciudadAutonomaBSAS">Ciudad Autonoma de Buenos Aires </option>
                <option value="bSAS">Buenos Aires</option>
                <option value="bahiaBlanca">Bahia Blanca</option>
                <option value="bernal">Bernal</option>
            </select><br>

            <label class="regisGenero" for="genero">Genero</label>
            <select  class= "comboGenero" name="genero" title="comboboxGenero">
                <option value="femenino">Femenino</option>
                <option value="masculino">Masculino</option>
                <option value="otros">Otros</option>
            </select><br>
            
            <label class="regisContraseña" for="contraseña">contraseña</label>
            <input class="cajaContraseña" class="cajas1" type="password" name="contraseña" placeholder="*******"><br>
            <p class="parrafo12"><b>Ingrese 8 Caracteres donde Hayá 1 mayuscula, numeros y caracteres especiales(!"#$%&")</b></p>
            <div class="terminos">
                <input class="checkbox" type="checkbox" title="checkbox" name="terminos" value="1"><!--values 1 te el checkbock-->
                <label class="regisTerminos" for="terminos">Acepto Terminos y condiciones </label><!--atributo for -->
            </div>
        <!-- </form> -->
        <!-- <p class="parrafo12">Ingrese 8 Caracteres donde allá 1 mayuscula, numeros y caracteres especiales(!"#$%&")</p>  -->
        <br>
        <button type="submit">aceptar</button>
        <input class="botonGrabar"  type="submit" value="Aceptar">
        <input class="botonModificar" type="submit" value="Modificar">
    </form>
    <hr>
    <footer id="footer"> 
        <div id="contactos">
            <div class="contactos1">
                <!-- <p>Copyright&copy; Todos los derechos reservados &#124; Telefonos 43556789/1128890590 &#124;       ARM Hardware y Software&#174; &#124; Contactanos <a href="mailto:marioleipzip@gmail.com">marioleipzip@gmail.com</a></p> -->
                <p class="parrafo14" >Nuestros Telefonos 4555-5555/114567-7890&#124;
                <a  class= "link2" href="mailto:centroasclepio@gmail.com">centroasclepio@gmail.com</a>&#124;
                    <a href="https://www.facebook.com/" title="link de facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/" title="link de twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.youtube.com/" title="link de youtube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://telegram.org/" title="link de telegram"><i class="fa-brands fa-telegram"></i></a>
                    <a href="https://www.whatsapp.com/" title="link de whatsapp"><i class="fa-brands fa-whatsapp"></i></a></p>  
            </div>
        </div>
    </footer>
</body>
</html>

