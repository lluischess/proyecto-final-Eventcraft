<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact</title>
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
	<!-- Menu -->
	<?php include("Menu.php"); ?>
</head>
<body>
	
<br>
<br>
<br>
<br>
<br>
<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Ubicación</h2>
				</div>
			
<!-- Mapa de ubicacion de empresa -->
<div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=cami%20ral%2C%2033%20La%20Garriga+(Eventcraft)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/crear-un-mapa-de-google/">Crear mapa interactivo</a> by <a href="https://www.mapsdirections.info/">Mapa España</a></iframe></div><br />


	<!-- Formulario de Contacto -->
	<div class="row">
					<div class="col-md-12">
						<form name="contactform" method="post" action="send_form_email.php">
							<center>
								<h3>Puedes contactarnos mediante este formulario</h3>
						    <div class="form-group">
						      <textarea class="form-control2" name="comments" id="comments" placeholder="Tu mensaje" data-original="Tu mensaje"></textarea>
						    </div>
						    <div class="form-group">
            				<input class="form-control2" name="c_name" id="c_name" placeholder="Nombre (Requerido)" type="text">
						    </div>
						    <div class="form-group">
						      <input class="form-control2" name="email" id="email" placeholder="Email (required)" type="text">
						    </div>
						    <div class="form-group">
            				<input class="form-control2" name="tema" id="tema" placeholder="Tema" type="text">
						    </div>
						     <center><button type="submit" class="btn btn-default" value="Submit">Enviar Mensaje</button></center>
						     </center>
						    </form>
						</div>
				</div>
						 
					
	
			<br>
	<!-- Footer -->
	<?php include("footer.php"); ?>
</body>
</html>