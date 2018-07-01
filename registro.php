<?php 

// Variavles para Guardar los datos del registro

		$bd_usuarios = 'user/Usuarios.php';
		// Nombre que es el usuario
		$user =$_POST['Nombre']; 
		// Apellido
		$apellido =$_POST['Apellido']; 
		// E-mail
		$mail =$_POST['mail']; 
		// Password 1
		$pass1 =$_POST['Password']; 
		// Repetir Password 1
		$repit =$_POST['Repit']; 
		// Cumple
		$date =$_POST['date']; 
		// adress
		$adress =$_POST['Adress']; 
		//Codi postal
		$postal =$_POST['Postal']; 
		// Citi
		$city =$_POST['City']; 
		// Provincia
		$provincia =$_POST['provincia']; 


// Comprovamos que el archivo existe
if(!file_exists($bd_usuarios)){
$error['noExiste'] = 'Disculpa, pero el archivo de base de datos de usuarios no existe';
$error2 = 'Disculpa, pero el archivo de base de datos de usuarios no existe';
$Resul = $error2;
}
// Comprovar permisos
if(!is_writable($bd_usuarios)) {
$error['noEscribe'] = 'Disculpa, pero el archivo de base de datos no admite escritura';
$error2 = 'Disculpa, pero el archivo de base de datos no admite escritura';
$Resul = $error2;
}
// Validamos Campos
/*if(empty($user)) {
$error['nombreVacio'] = 'Disculpa, debes escribir un nombre de usuario';
}*/
if(strlen($pass1) <= 3) {
$error['passwordCorto'] = 'Disculpa, el password debe ser de como minimo de 4 caracteres';
$error2 = 'Disculpa, el password debe ser de como minimo de 4 caracteres';
$Resul = $error2;
}
elseif($pass1 != $repit) {
$error['passwordNoCoincide'] = 'Disculpa, los dos password deben coincidir';
$error2 = 'Disculpa, los dos password deben coincidir';
$Resul = $error2;
}

// Revisamos el mail del usuario por si no existe
$contenido_verificacion = file_get_contents($bd_usuarios);
$array_verificacion = explode('||', $contenido_verificacion);
$cuento_los_usuarios = count($array_verificacion);
	for($i = 0; $i <= $cuento_los_usuarios; $i++) {
	$exploto_usuarios = explode('|', $array_verificacion[$i]);
		if(isset($exploto_usuarios[4]) && $mail == $exploto_usuarios[4]) {
		$error['EmailExistente'] = 'Disculpa, ese email ya ha sido registrado';
		$error2 = 'Disculpa, este email ya ha sido registrado';
		$Resul = $error2;
		}
	}

// Miramos si el nombre de Usuario existe

for($i = 0; $i <= $cuento_los_usuarios; $i++) {
	$exploto_usuarios = explode('|', isset($array_verificacion[$i]));
		if(isset($exploto_usuarios[2]) && $user == $exploto_usuarios[2]) {
		$error['NombreExistente'] = 'Disculpa, ese nombre ya ha sido registrado';
		$error2 = 'Disculpa, este nombre ya ha sido registrado';
		$Resul = $error2;
		}
	}

// Si no existen Errores Registramos al usuario

if(empty(isset($error))) {
$contenido_usuarios = file_get_contents($bd_usuarios);
$array_usuarios = explode('||', $contenido_usuarios);
$cuento_usuarios = count($array_usuarios);
$abro = fopen($bd_usuarios, 'a+');
fwrite($abro, filemtime($bd_usuarios)."|$cuento_usuarios|$user|".md5($pass1)."|$mail||");
fclose($abro);
$mensaje = 'Usuario Registrado con Exito'; 
$Resul = $mensaje;
}
 ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Registrado</title>
      <!-- Imports -->
      <!-- Fuentes -->
      <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
      <!-- Animate.css -->
      <link rel="stylesheet" href="css/animate.css">
      Icomoon Icon Fonts 
      <link rel="stylesheet" href="css/icomoon.css">
      <!-- Themify Icons -->
      <link rel="stylesheet" href="css/themify-icons.css">
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- Magnific Popup -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- Owl Carousel  -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!-- Theme style  -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Formulario Validacion JS -->
      <script src="js/valida.js"></script>
      <?php
         // Import menu
          include("Menu.php"); 
          ?>
   </head>
   <body>
      <br>
      <!-- Formulario de Registro Parte 1 -->
      <div id="gtco-subscribe">
         <div class="gtco-container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                  <h2>Registro</h2>
                  <p>Regístrate y crea tu primer evento.</p>
                  <p><?php 
                  if ($Resul == "Usuario Registrado con Exito") {
					echo "<font color='Blue'>".$Resul."</font>"; 
                  } if ($Resul != "Usuario Registrado con Exito") {
                  echo "<font color='Red'>".$Resul."</font>"; 
              }
                  ?></p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <form action="registro.php" method="post" onsubmit="return valida(this);">
                     <div class="form-group">
                        <input class="form-control" id="Nombre" placeholder="Nombre" name="Nombre" />
                     </div>
                     <div class="form-group">
                        <input class="form-control" id="Apellido" placeholder="Apellido" name="Apellido" />
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="email" id="mail" placeholder="E-mail" name="mail"  />
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="Password" id="Password" placeholder="Contraseña" name="Password"  />
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="Password" id="Repit" placeholder="Verificar Contraseña" name="Repit"  />
                     </div>
                     <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                           <h2>Fecha de Nacimiento</h2>
                        </div>
                     <div class="form-group">
                     	<input class="form-control" id="date" type="date" name="date" step="1" min="" max=""  />
                        
                     </div>
                     <div class="row">
                        <br>
                        <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                           <h2>Ubicación</h2>
                        </div>
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="text" id="Adress" name="Adress" placeholder="Dirección (Calle, Numero)" />
                        <input type="hidden" name="daddr"   />
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="text" id="Postal" name="Postal" placeholder="Codigo Postal" />
                        <input type="hidden" name="daddr"   />
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="text" id="City" name="City" placeholder="Ciudad" />
                        <input type="hidden" name="daddr"   />
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="text" id="provincia" name="provincia" placeholder="Provincia" />
                        <input type="hidden" name="daddr"   />
                     </div>
                     <div>
                        <center>
                           <input type="checkbox" id="AccepTerms" name="AccepTerms"><font color="White">Aceptar Términos y Condiciones</font>
                        </center>
                     </div>
                     <br>
                     <div>
                        <center>
                           <button type="submit" name="submit" class="btn btn-default" id="enviar" value="Registrarme">Aceptar y Siguiente</button>
                        </center>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>

