<!DOCTYPE html>
<html>
   <?php

   //$con = mysqli_connect("localhost", "root", "", "webevents") or die ()
      // Comprobamos si el Usuario tiene la sesión iniciada


      session_start();
      if (isset($_GET['ERROR']))
       {
         if ($_GET['ERROR'] == 1) {
            echo "<script> var msg = 'Login incorrecto';
                  alert(msg); 
                </script>";
         }
      }
      if($_SESSION) {
      header('Location:index.php');
       $error = "";
      }
      else {
         if(!$_SESSION) {
      	$error = "Login incorrecto";
      }
      

      ?>
   <head>
   	<!-- Imports -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login</title>
      <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
      <!-- Animate.css -->
      <link rel="stylesheet" href="css/animate.css">
      <!-- Icomoon Icon Fonts-->
      <link rel="stylesheet" href="css/icomoon.css">
      <!-- Themify Icons-->
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
      <!-- Modernizr JS -->
      <script src="js/modernizr-2.6.2.min.js"></script>
      <!-- Formulario Validacion JS -->
      <script src="js/validalogin.js"></script>

       <?php
         // Import menu
          include("Menu.php"); 
          ?>
   </head>
   <body>
      <br>

      <div id="gtco-subscribe">
         <div class="gtco-container">
            <div class="row">
               <br>
      <br>
      <br>
      <br>
               <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                  <h2>Inicia Sesión</h2>
                  <p>Se el primero en conocer nuevos eventos.</p>
                  <p><?php echo "<script> var msg = 'Login incorrecto'; 
                </script>"; ?> 
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <form action="ingreso.php" id="myform" method="post" >
                     <div class="form-group">
                        <input class="form-control" id="Nombre" placeholder="Entrar Nombre de Usuario" name="Nombre">
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control" id="Password" placeholder="Entrar Contraseña" name="Password">
                     </div>
                     <div class="checkbox">
                        <label><input type="checkbox" name="remember"><font color="White">Guardar Inicio de Sesión</font></label>
                     </div>
                     <button onclick="validalogin(this)" type="submit" class="btn btn-default" name="ingresar">Entrar</button>
                  </form>

                  <br>
                  <br>
                  <br>
               </div>
            </div>
         </div>
      </div>
      <?php }
      ?>
   </body>
</html>