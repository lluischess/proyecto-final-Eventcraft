<!DOCTYPE html>
<html>
   <?php 
     // session_start();
      //VARIABLES PARA EL AVATAR
     // $avatar = "user/avatar/".$_SESSION['nombre'].".png";
      $avatar = $_SESSION['nombre'];
      // if (!file_exists($avatar)) {
      // $avatar = "user/avatar/default.png";
      // }
      ?>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Events</title>
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
      <script src="js/events.js"></script>
      <!-- Menu -->
      <?php include("Menu.php"); ?>
   </head>
   <body>
      <br>
      <br>
      <br>
      <style type="text/css">
         form {
         width: 25em;
         padding: 1em;
         border: 1px solid #ccc;
         border-radius: .5em;
         margin: 1em;
         box-shadow: .25em .25em 0 #ccc;
         }
         /* Estilo del área del input[file] */
         .drag-drop {
         height: 8em;
         width: 8em;
         background-color: #ccc;
         border-radius: 4em;
         text-align: center;
         color: white;
         position: relative;
         margin: 0 auto 1em;
         }
         .drag-drop span.desc {
         display: block;
         font-size: .7em;
         padding: 0 .5em;
         color: #000;
         }
         input[type="file"] {
         height: 10em;
         opacity: 0;
         position: absolute;
         top: 0;
         left: 0;
         width: 100%; 
         z-index: 3;
         }
         /* Estilo del área del input[file] con :hover */
         .drag-drop:hover, input[type="file"]:hover {
         background-color: #3276b1;
         cursor: pointer;
         }
         .drag-drop:hover span.desc {
         color: #fff;
         } 
         /* Composición del icono de Upload con FontAwesome */
         .fa-stack { margin-top: .5em; }
         .fa-stack .top { color: white; }
         .fa-stack .medium { 
         color: black;
         text-shadow: 0 0 .25em #666;
         }
         .fa-stack .bottom { color: rgba(225, 225, 225, .75); }
         .drag-drop:hover .pulsating {
         animation: pulse1 1s linear infinite;
         animation-direction: alternate ;
         -webkit-animation: pulse1 1s linear infinite;
         -webkit-animation-direction: alternate ;
         }
         /* Keyframing de la animación */
         @keyframes pulse1 {
         0% { color: rgba(225, 225, 225, .75); }
         50% { color: rgba(225, 225, 225, 0.25); }
         100% { color: rgba(225, 225, 225, .75); }
         }
         @-moz-keyframes pulse1 {
         0% { color: rgba(225, 225, 225, .75); }
         50% { color: rgba(225, 225, 225, 0.25); }
         100% { color: rgba(225, 225, 225, .75); }
         }
         @-webkit-keyframes pulse1 {
         0% { color: rgba(225, 225, 225, .75); }
         50% { color: rgba(225, 225, 225, 0.25); }
         100% { color: rgba(225, 225, 225, .75); }
         }
         @-ms-keyframes pulse1 {
         0% { color: rgba(225, 225, 225, .75); }
         50% { color: rgba(225, 225, 225, 0.25); }
         100% { color: rgba(225, 225, 225, .75); }
         }
      </style>
      <?php
if (empty($_SESSION)) {?>
<div id="contenido">
<h1>Este contenido es solo para usuarios registrados</h1>
<p>Disculpa, pero no eres un usuario registrado o no has iniciado sesion</p>
<p><a href="singup.php">Registrate</a> | <a href="login.php">Inicia Sesion</a></p>
</div>

<?php
} else {
?>
     <center><form role="form">
         <div class="form-group">
            <label for="name">Usuario</label>
            <input type="text" class="form-control" id="name" />
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" />
         </div>
         <label for="photo">Incluya una foto</label>
         <div class="drag-drop">
            <input type="file" multiple="multiple" id="photo" />
            <span class="fa-stack fa-2x">
            <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
            <i class="fa fa-circle fa-stack-1x top medium"></i>
            <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
            </span>
            <span class="desc">Pulse aquí para añadir archivos</span>
         </div>
         <button type="submit" class="btn btn-primary">Editar</button>
         <button type="reset" class="btn btn-default">Cancelar</button>
      </form></center> 

      <?php }?>
   </body>