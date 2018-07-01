<?php 
include("user/Eventoclass.php");
$Evento = new Evento();
		$Evento->fill($_POST);
		if (isset($_POST['accionParticipar'])) {
			$Evento->ParticiparEvent($_POST['nomSes'],$_POST['idevento']);

			exit();
		}


 ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vista del evento</title>
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
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<!-- Modernizr JS -->
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
	<!-- Modernizr JS -->
	<script src="js/events.js"></script>
	<script type="text/javascript">
		 function participar(i){
      	// logica participar button
      	var nomses = $(i).attr('data-ses');
      	var id = $(i).attr('data-id');

	 	var parametros = {
                "nomSes" : nomses,
                "idevento": id,
                "accionParticipar" : '1'
        };
      	var url ='Detallesevento.php';
      	$.ajax({
         type:'POST',
         url: url,
         data: parametros,
         beforeSend: function () {
                  
                },
            success: function(data)
            {
            	if (data == 1) {
            		swal({
		               title:"¡Felicidades ahora ya participas al evento !", 
		               text:"Aceptar para continuar ", 
		               type: "success", 
		               confirmButtonClass: 'confirm btn btn-success',
		               confirmButtonText: "Aceptar" 
		                },
		               function(isConfirm){  
		                if (isConfirm) {     
		                     location.reload();
		                } else {    
		                     location.reload();
		                 } 
		              });


            	}else if (data == 2) {
            		//alert(data);
            	}
              

            }
         });
      }


	</script>
<!-- import $ -->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<?php include("Menu.php");?>
	<?php ?>
</head>
<body onunload="Mostrarevento.php">

	<?php
		if (isset($_SESSION['Nombre'])) {
			# code...
		}else{
			header('location:login.php');
		}
		

	?>
	<br>
	<br>

	<br>
	
	<div class="gtco-section border-bottom" id="how-it-works" data-section="how-it-works">
		<div class="gtco-container">
				<?php 
				// Mostrar detalles del evento recibiendo el id de la base de datos
					if (isset($_GET['id'])) {
						$datos = $Evento->Selectbyid($_GET['id']);
						$id = $_GET['id'];
						if ($datos > 0) {
							foreach ($datos as $total) {
								$nombre = $total['nombre'];
								$descripcion = $total['descripcion'];
								$aficion = $total['aficion'];
								$fecini = $total['fecha_ini'];
								$fechafin = $total['fec_fin'];
								$max = $total['max'];
						
							}

						}

					}else{

						$id = '';
						$nombre = $Evento->getNom_Evento();
						$descripcion = $Evento->getDescripcion_Evento();
						$aficion = $Evento->getAficion_Evento();
						$fecini = $Evento->getFechaInicio_Evento();
						$fechafin = $Evento->getFechaFin_Evento();
						$max = $Evento->getParticipantes_Evento();
					}

					if ($nombre == '') {
						echo "No hay registros  disponibles";
					}else{
	 			?>

	 			
			<center><div class="gtco-heading">
						<h2><?php echo  $nombre;?></h2>
						<p><?php echo  $descripcion;?></p>
					</div></center>
			<div class="row">
				<div class="col-md-6">
					<div class="gtco-heading">
					<p>Puntos Importantes del Evento:</p>
				</div>
					<div class="row">

						<div class="col-md-12">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-check"></i>
								</span>
								<div class="feature-copy">
									<h3>Afición:</h3>
									<p><?php echo  $aficion;?></p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-check"></i>
								</span>
								<div class="feature-copy">
									<h3>Fecha del Inicio del Evento:</h3>
									<p><?php echo  $fecini;?></p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-check"></i>
								</span>
								<div class="feature-copy">
									<h3>Fecha de Terminación del Evento:</h3>
									<p><?php echo  $fechafin;?></p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-check"></i>
								</span>
								<div class="feature-copy">
									<h3>Participantes:</h3>
									<p><?php echo $max; ?></p>
								</div>
							</div>
						</div>
							<div class="col-md-12">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-check"></i>
								</span>
								<div class="feature-copy">
									
									<h3>Participantes inscriptos:</h3>
									<p>
										<?php 

											if (isset($_GET['id'])) {
																							
													$users = $Evento->Selectbyusers($id);
													if ($users > 0) {
														# code...
													
													foreach ($users as $u ) {
														echo $u['nombre'].'<br>';
													}
												}else{
													echo 'No hay usuarios inscriptos al evento';
												}
											}else{
												echo "0";
											}

										?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<?php 

							if (isset($_GET['id'])) {
								# code...
							
							if (isset($_SESSION['Nombre'])) {
										$part = $Evento->UserEvent($_SESSION['Nombre'],$id);
										if ($part == 2) {
										
							 ?>
							<p><a href="" data-ses='<?php echo $_SESSION['Nombre']; ?>' data-id='<?php echo $total['id']; ?>' class="btn btn-primary btn-lg btn-block" onclick="participar(this); return false"><i class="icon-apple"  ></i>Participar en el Evento</a></p>
							<?php }else{ ?> <p><a href="#"  onclick="return false" class="btn btn-success btn-lg btn-block" ><i class="icon-apple"  ></i>Ya estas participando en el evento </a></p><?php    } } } else{}?> 
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
					<div id="wrapper">
					  <div id="menu">
					        <p class="welcome">Chat del Evento: <b></b></p>
					        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
					        <div style="clear:both"></div>
					    </div>
					     
					    <div id="chatbox"></div>
					     
					    <form name="message" action="">
					        <input name="usermsg" type="text" id="usermsg" size="63" />
					        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
					    </form>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>

	<br>
<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Ubicación Del Evento</h2>
				</div>
			
<!-- Mapa de ubicacion de empresa -->
<div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=cami%20ral%2C%2033%20La%20Garriga+(Eventcraft)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/crear-un-mapa-de-google/">Crear mapa interactivo</a> by <a href="https://www.mapsdirections.info/">Mapa España</a></iframe></div><br />

</body>

<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
</html>