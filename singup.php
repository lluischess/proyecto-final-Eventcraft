<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Sing Up</title>
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
      <br>
      

      <!-- Formulario de Registro Parte 1 -->
      <div id="gtco-subscribe">
         <div class="gtco-container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                  <h2>Registro</h2>
                  <p>Regístrate y crea tu primer evento.</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <form action="registro.php" method="post" onsubmit="return valida(this);">
                     <div class="form-group">
                        <input class="form-control" id="Nombre" placeholder="Nombre" name="Nombre" />
                     </div>
                     <div class="form-group">
                        <input class="form-control" id="nikname" placeholder="Nickname" name="nikname" />
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