<?php 
	include("user/Eventoclass.php");

	$Evento = new Evento();
			// validacion de botones avanzada
		//curso avanzado en PHP!
		if (isset($_POST['accionEliminar']) && isset($_POST['ideliminar'])) {
			$ideliminar = $_POST['ideliminar'];
			$Evento->deletebyid($ideliminar);
			exit();
		}elseif (isset($_POST['accionEditar'])) {
			$Evento->fill($_POST);
			$ideditar = $_POST['ideditar'];
			$Evento->UpdateEvent($ideditar);
			exit();

		}elseif (isset($_POST['accionParticipar'])) {
			$Evento->ParticiparEvent($_POST['nomSes'],$_POST['idevento']);

			exit();
		}
	

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VistaAdmin del evento</title>
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
	<script src="js/events.js"></script>

<!-- import $ -->
	<script src="js/cargaraficiones.js"></script>

	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<?php include("Menu.php");

		if (isset($_SESSION['Nombre'])) {
			
		}else{
			header('location:login.php');
		}
	?>
</head>
<script type="text/javascript">
	 function eliminar(i){
	 		// Mensajes post eliminación del evento
	 	var id = $(i).attr('data-id');
	 	var nombre = $(i).attr('data-name');
	 	var parametros = {
                "ideliminar" : id,
                "accionEliminar" : '1'
        };
         var url ='detallesevento_user.php';
         swal({
            title:"¡Estas  seguro?! ", 
            text:"Vas a borrar  toda la información del evento  ", 
            type: "warning", 
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonClass: 'confirm btn btn-success',
            confirmButtonText: "Aceptar" 
         },function(isConfirm){  

         if (isConfirm) {    
          
         $.ajax({
         type:'POST',
         url: url,
         data:parametros,
         beforeSend: function () {
                  // function 
                },
            success: function(data)
            {
            	if (data == 1) {
	   
	             	location.href="listevents.php?result=1&nombre="+nombre; 
               }         

            }
         });  

      }else{
      }
      });   

      }
      function submitForm(){
      	// editar evento
      	 var url ='detallesevento_user.php';
      	 $.ajax({
         type:'POST',
         url: url,
         data:$('.detallesuser').serialize(),
         beforeSend: function () {
                  
                },
            success: function(data)
            {
            	if (data == 1) {
	             	    

	             	 swal({
		               title:"¡Cambios guardados!", 
		               text:"El evento ah sido actualizado  para poder ver los cambios actualiza la pagina ", 
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

               }else{
               	
               }     

            }
         });  
      }
      function participar(i){
      	// logica participar button
      	var nomses = $(i).attr('data-ses');
      	var id = $(i).attr('data-id');

	 	var parametros = {
                "nomSes" : nomses,
                "idevento": id,
                "accionParticipar" : '1'
        };
      	var url ='detallesevento_user.php';
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
		               title:"¡Felicidades ahora ya participas en este evento !", 
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
<body onload="cargaraficiones()" >
	<br>
	<br>
	<br>
	
	<div class="gtco-section border-bottom" id="how-it-works" data-section="how-it-works">
		<div class="gtco-container">
			<?php 
					if (isset($_GET['id'])) {
						$datos = $Evento->Selectbyid($_GET['id']);

						if ($datos > 0) {
							foreach ($datos as $total) {
	 			?>


				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog modal-lg">

				  
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Editar Evento</h4>
				      </div>
				      <div class="modal-body">
				        <form  class="detallesuser" method="post"  onsubmit="submitForm(); return false">
							<div class="form-group">
								<input class="form-control" id="Name_event" placeholder="Nombre del Evento" name="Name_event" value="<?php echo $total['nombre']; ?>" >
							</div>
								<div class="form-group">
									<select  id="aficion" name="aficion" class="form-control">
				  						<option selected value="<?php echo $total['aficion']; ?> "><?php echo $total['aficion']; ?></option>
				 					</select>
								</div>
								<div class="form-group">
									<textarea name="Desc_event" rows="10" id="Desc_event" placeholder="Descripción del Evento" class="form-control" > <?php echo $total['descripcion']; ?></textarea>
								</div>
								<div class="form-group">
									<input class="form-control" id="Max_personas_event" placeholder="Numero Maximo de Participantes" name="Max_personas_event" value="<?php echo $total['max']; ?>" >
								</div>
								<div class="col-md-8 col-md-offset-2 text-center ">
									<b>FECHA DEL INICIO DEL EVENTO</b>
								</div>
								<div class="form-group">
									<input class="form-control" id="fechainicio" type="datetime-local" name="fechainicio" step="1" min="" max=""  value="<?php echo $total['fecha_ini']; ?>">
								</div>
								<div class="col-md-8 col-md-offset-2 text-center ">
									<b>FECHA DE FIN DEl EVENTO</b>
								</div>
								<div class="form-group">
									<input class="form-control" type="datetime-local" id="fechafin" name="fechafin" step="1" min="" max="" value="<?php echo $total['fec_fin']; ?>" >
								</div>
								<div class="row">
									<br>
									<div class="col-md-8 col-md-offset-2 text-center ">
										<b>UBICACIÓN DEL EVENTO</b>
									</div>
								</div>
								<div class="form-group">
									<input class="form-control" id="Adresse"  type="text" name="Adresse" placeholder="Dirección del Evento" value="<?php echo $total['direccion']; ?>" />
									<input type="hidden" name="daddr"  />
								</div>
								<div class="form-group">
									<input class="form-control" id="Citye" type="text" name="Citye" placeholder="Ciudad del Evento" value="<?php echo $total['ciudad']; ?>"/>
									<input type="hidden" name="ideditar" value="<?php echo $total['id']; ?>"   />
								</div>
								<div class="form-group">
									<input class="form-control" id="Provinciae" type="text" name="Provinciae" placeholder="Provincia" value="<?php echo $total['provincia']; ?>" />
									<input type="hidden" name="accionEditar"  value="1"  />
								</div>
										    

								<center>
									    <br>
								</center>
							<div class="text-center">
								<button class="btn btn-default" value="crearevento">Editar evento</button>
							</div>
							</form>


				      </div>
				      <div class="modal-footer">
				      </div>
				    </div>

				  </div>
				</div>
			<center><div class="gtco-heading">
						<h2><?php echo  $total['nombre'];?></h2>
						<p><?php echo  $total['descripcion'];?></p>
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
									<p><?php echo  $total['aficion'];?></p>
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
									<p><?php echo  $total['fecha_ini'];?></p>
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
									<p><?php echo  $total['fec_fin'];?></p>
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
									<p><?php echo $total['max']; ?></p>
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
										<?php $users = $Evento->Selectbyusers($total['id']);
												if ($users > 0) {
													# code...
												
												foreach ($users as $u ) {
													echo $u['nombre'].'<br>';
												}
											}else{
												echo 'No hay usuarios inscriptos al evento';
											}
										?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<?php if (isset($_SESSION['Nombre'])) {
										$part = $Evento->UserEvent($_SESSION['Nombre'],$total['id']);
										if ($part == 2) {
											
										
							 ?>
							<p><a href="" data-ses='<?php echo $_SESSION['Nombre']; ?>' data-id='<?php echo $total['id']; ?>' class="btn btn-primary btn-lg btn-block" onclick="participar(this); return false"><i class="icon-apple"  ></i>Participar en el Evento</a></p>
							<?php }else{ ?> <p><a href="#"  onclick="return false" class="btn btn-success btn-lg btn-block" ><i class="icon-apple"  ></i>Ya estas participando en el evento </a></p><?php    } }?>  
								
								
							<p><a href="" class="btn btn-primaryedit btn-lg btn-block" data-toggle="modal" data-target="#myModal"><i class="icon-apple"></i>Editar Evento</a></p>
							
							<p><a href="listevents.php" onclick="eliminar(this); return false" class="btn btn-primarydelete btn-lg btn-block" data-id="<?php echo $total['id'] ?>" data-name="<?php echo $total['nombre'] ?>"><i class="icon-apple"></i> Eliminar Evento</a></p>
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
			<?php 

				}
				}else{
			?>
			<center><div class="gtco-heading">
						NO HAY NINGUN EVENTO POR AQUI, PRUEBA EN OTRA PARTE.

			</div></center>
			<?php 

				}
			}

			 ?>

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