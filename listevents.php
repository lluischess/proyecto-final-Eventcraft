<!DOCTYPE html>
<html>
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
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<!-- Modernizr JS -->
	<script type="text/javascript" src="js/sweetalert.min.js"></script>

<!-- Menu -->
	<?php include("Menu.php"); ?>
	<?php include("user/Eventoclass.php");?>
	 </head>
	<?php
		if (isset($_SESSION['Nombre'])) {
			# code...
		
			if (isset($_GET['result']) && isset($_GET['nombre'])) {
			 	if ($_GET['result'] == 1) {
			 			echo "<script>swal(\"¡Bien!\", \"el evento ".$_GET['nombre']." eliminado correctamente\", \"success\");</script>";
			 	}
			 }
		}else{
			header('location:login.php');
		}
		$Evento = new Evento();
		$datos = $Evento->Selectfull();






	 ?>
	 <body>
	
	<!--Lista de eventos-->
	<div class="gtco-container">
			<div class="row">
				<div class="col-xs-10 displayspanbutton">
					<div class="gtco-section border-bottom" id="how-it-works" data-section="how-it-works">
						<p><a href="gestionevents.php" class="btn btn-primary btn-lg btn-block"><i class="icon-apple"></i>Crear eventos</a></p>
					</div>
				</div>
			</div>
	</div>
	<br>

	<div class="container">
        <div class="row">
        <?php  if ($datos > 0) {
        	# code...
         ?>
        <div class="col-xs-12 col-sm-6">
			<h1>Tus eventos:</h1>
		  <div class="list-group">
		  	<?php 
		  		foreach ($datos as $total) {

					  echo "<a href='Detallesevento_user.php?id=".$total['id']."' class='list-group-item'>
      						<h4 class='list-group-item-heading'>Nombre Evento: ".$total['nombre'] ."</h4>
     		 				<p class='list-group-item-text'>Descripción: ".$total['descripcion'] ."</p>
    						</a> ";
				}
		  	 ?>
		  </div>
		  </div>
		  <div class="col-xs-12 col-sm-6">
		  <h1>Eventos suscritos:</h1>
		  <div class="list-group">
		   	<?php 
		  		foreach ($datos as $total) {

					  echo "<a href='Detallesevento.php?id=".$total['id']."' class='list-group-item'>
      						<h4 class='list-group-item-heading'>Nombre Evento: ".$total['nombre'] ."</h4>
     		 				<p class='list-group-item-text'>Descripción: ".$total['descripcion'] ."</p>
    						</a> ";
				}
		  	 ?>
		  </div>
		  </div>

		  <?php }else{
		  	echo "<div class='text-center'><h2>No hay  registros  disponibles<h2></div>";
		  } ?>
	</div>
</div>

</body>