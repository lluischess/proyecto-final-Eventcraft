<!DOCTYPE html>
<html>
<head>
	<?php 
// session_start();
// if(!$_SESSION) {
// header('Location:login.php');
// exit();
// }
?>
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

	<script src="js/cargaraficiones.js"></script>
	<script src="js/guardarevento.js"></script>
 <!-- Menu -->
	<?php include("Menu.php"); ?>
	 </head>

	 <body onload="cargaraficiones()">
	
	<br>
	<br>
	<br>
	<?php 
	if (isset($_SESSION['Nombre'])) {
		# code...
	}else{
		header('location:login.php');
	}
	include("user/Eventoclass.php");
	$Evento = new Evento();

	$Evento->fill($_POST);
	if (empty($_POST['Name_event'])){
        $Name_event = "";
        $Evento->setNom_Evento($Name_event);
        }
        else{
           $Evento->setNom_Evento($_POST['Name_event']);
        }
    if (empty($_POST['aficion'])){
        $aficion = "";
        $Evento->setAficion_Evento($aficion);
        }
        else{
           $Evento->setAficion_Evento($_POST['aficion']);
        }
    if (empty($_POST['Desc_event'])){
        $Desc_event = "";
        $Evento->setDescripcion_Evento($Desc_event);
        }
        else{
           $Evento->setDescripcion_Evento($_POST['Desc_event']);
        }
    if (empty($_POST['Max_personas_event'])){
        $Max_personas_event = "";
        $Evento->setParticipantes_Evento($Max_personas_event);
        }
        else{
           $Evento->setParticipantes_Evento($_POST['Max_personas_event']);
        }
    if (empty($_POST['fechainicio'])){
        $fechainicio = "";
        $Evento->setFechaInicio_Evento($fechainicio);
        }
        else{
           $Evento->setFechaInicio_Evento($_POST['fechainicio']);
        }
    if (empty($_POST['fechafin'])){
        $fechafin = "";
        $Evento->setFechaFin_Evento($fechafin);
        }
        else{
           $Evento->setFechaFin_Evento($_POST['fechafin']);
        }
    if (empty($_POST['Adresse'])){
        $Adresse = "";
        $Evento->setDireccion_Evento($Adresse);
        }
        else{
           $Evento->setDireccion_Evento($_POST['Adresse']);
        }
    if (empty($_POST['Citye'])){
        $Citye = "";
        $Evento->setCiudad_Evento($Citye);
        }
        else{
           $Evento->setCiudad_Evento($_POST['Citye']);
        }
    if (empty($_POST['Provinciae'])){
        $Provinciae = "";
        $Evento->setProvincia_Evento($Provinciae);
        }
        else{
           $Evento->setProvincia_Evento($_POST['Provinciae']);
        }

  /*      $datos = array();
	if (isset($_POST['submit']))
 {
    if ((isset ($_POST['Name_event']) && !empty($_POST['Name_event'])) && (isset ($_POST['Desc_event']) && !empty($_POST['Desc_event']))
    && (isset ($_POST['Max_personas_event']) && !empty($_POST['Max_personas_event'])) && (isset ($_POST['aficion']) && !empty($_POST['aficion'])))
    {
        array_push($datos,array("Name_event" => $_POST['Name_event'], "Desc_event" => $_POST['Desc_event'],"fechainicio" => $_POST['fechainicio'],"fechafin" => $_POST['fechafin'],"Adresse" => $_POST['Adresse'], "Max_personas_event" => $_POST['Max_personas_event'], "aficion" => $_POST['aficion']));
}}*/
// 	if(isset($_POST['Name_event'])) {
// 	$Name_event = $_POST['Name_event'];
//     $aficion = $_POST['aficion'];
//     $Desc_event = $_POST['Desc_event'];
//     $Max_personas_event = $_POST['Max_personas_event'];
//     $fechainicio = $_POST['fechainicio'];
//     $fechafin = $_POST['fechafin'];
//     $Adresse = $_POST['Adresse'];
//     $Citye = $_POST['Citye'];
//     $Provinciae = $_POST['Provinciae'];
// }


	 ?>
	<!--Crear Evento-->
	<div id="gtco-subscribe">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>CREA TU NUEVO EVENTO</h2>
						<p>Empecemos por lo basico.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="Detallesevento.php" method="post" onsubmit="return guardarevento(this);">
						    <div class="form-group">
						      <input class="form-control" id="Name_event" placeholder="Nombre del Evento" name="Name_event" >
						    </div>
						    <div class="form-group">
						       <select  id="aficion" name="aficion" class="form-control">
  								<option>Seleccione una Afición...</option>
 							</select>
						    </div>
						    <div class="form-group">
						      <textarea name="Desc_event" rows="10" id="Desc_event" placeholder="Descripción del Evento" class="form-control"></textarea>
						    </div>
						    <div class="form-group">
						      <input class="form-control" id="Max_personas_event" placeholder="Numero Maximo de Participantes" name="Max_personas_event" >
						    </div>
							<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
							<h2>FECHA DEL INICIO DEL EVENTO</h2>
							</div>
						    <div class="form-group">
						    <input class="form-control" id="fechainicio" type="datetime-local" name="fechainicio" step="1" min="" max="" >
						    </div>
						    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						    <h2>FECHA DE FIN DEl EVENTO</h2>
							</div>
						    <div class="form-group">
						    <input class="form-control" type="datetime-local" id="fechafin" name="fechafin" step="1" min="" max="" >
						    </div>
						    <div class="row">
						    	<br>
								<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
									<h2>UBICACIÓN DEL EVENTO</h2>
								</div>
							</div>
						    	<div class="form-group">
							   <input class="form-control" id="Adresse"  type="text" name="Adresse" placeholder="Dirección del Evento" />
							   <input type="hidden" name="daddr"   />
							   </div>
							   <div class="form-group">
							   <input class="form-control" id="Citye" type="text" name="Citye" placeholder="Ciudad del Evento" />
							   <input type="hidden" name="daddr"   />
							   </div>
							   <div class="form-group">
							   <input class="form-control" id="Provinciae" type="text" name="Provinciae" placeholder="Provincia" />
							   <input type="hidden" name="daddr"   />
							   <input type="hidden" name="accionCrear" value="1"   />
							   </div>
						    

						    <center>
					    <br>
						    <button name="submit" type="submit" class="btn btn-default" value="crearevento">Crear Evento</button></center>
						  </form>
					</div>
				</div>
			</div>
		</div>

</body>