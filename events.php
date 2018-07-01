<?php include("user/Eventoclass.php");
$event = new Evento();
	if (isset($_POST['accionBuscar']) ) {
			if ($_POST['accionBuscar'] == 1) {
				$buscar = $_POST['address'];

				if (empty($buscar)) {
					
				}else{
					$event->busqueda($buscar,1);
					exit();
				}
			}else if ($_POST['accionBuscar'] == 2) {

				$buscar = $_POST['aficion'];

				if (empty($buscar)) {
					
				}else{
					$event->busqueda($buscar,2);
					exit();
				}
			}
	}
?>
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
	<script src="js/Geocodificacio.js"></script>
	<script src="js/cargaraficiones.js"></script>
	<script src="js/filtro.js"></script>

<!-- import $ -->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<!-- mapa eventos JS -->

	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX_Jjif4_dvYRP2fZRnzNJ3AQ68kWzSLA&callback=initMap">
    </script>
    <!-- Menu -->
	<?php include("Menu.php"); ?>

</head>
<body onload="cargaraficiones(); initialize()">

	<br>
	<br>
	<!--Botones para ir a a lista de eventos y a crear nuevo evento-->
	<br>
	<br>
	<br>
	 <div class="bs-example">
	 	<?php if (isset($_SESSION['Nombre'])) {
	 		# code...
	 	 ?>
		<a href="listevents.php">
	    <button type="button" class="btn btn-primary btn-lg" data-toggle="button" id="go-to-event">Lista de Eventos</button></a>
	    <a href="gestionevents.php">
	    <button type="button" class="btn btn-primary btn-lg" data-toggle="button" id="go-to-event">Crear Evento</button></a>
	    <?php } ?>
	</div>

<!-- Buscador de eventos -->
	
	<!--Buscador de eventos -->
	<div class="events-row" style="
    margin-top: 10px;">
    	<STRONG><big>Buscar por ciudad:</big></STRONG>
		<div>
			<div>
    			<input id="address" type="textbox" value="Barcelona">
   				<input type="button" value="Buscar" onclick="codeAddress()">
  			</div>
			<!-- <input id="searchBar" type="text" placeholder="Buscar..." name="" onkeyup="changeLocation()"> -->
		</div><STRONG><big>Buscar por aficiones:</big></STRONG>
		<select onselect="filtroevent()"  onchange="filtroevent();" id="aficion" name="aficion" class="form-control2b">
  				<option value="default">Seleccione una Afición...</option>

 		</select>
		<!-- <div class="events-filterbox">
			<div onclick="search()">res</div>
		</div> -->
	</div>
<div id="map"></div>
<?php 
/* instacioamos  la  clase  evento*/


$db = new Conexion();
$datos = $event->Selectfull();

/*accedemos al metodo para seleccionar  todos  los eventos registrados */
$json = 'ListaEventos.json'; 
		$data = file_get_contents($json); 
		$items = json_decode($data);

		$aficion = ""; 

		$json2 = 'ListaEventos.json'; 
		$data2 = file_get_contents($json2); 
		$items2 = json_decode($data2);


 ?>

<div class="contenedor">
<div class="item-tot">
	 <ul class="list-group">
    <li class="list-group-item"> 
    	<center><h2>Eventos encontrados:</h2></center>
</li>
<?php 


			if ($aficion == "") {
				if ($datos > 0) {
					# code...
				
			  		foreach ($datos as $total) {

			  			
						  echo "<li class='list-group-item'>
						    	<a href='Detallesevento.php?id=".$total['id']."' class='list-group-item'>
						      	<h2>".$total['nombre']."</h2>
						      	<dl class='dl-horizontal'>
						  
						      <dt>Afición:</dt>
						      <dd>".$total['aficion']."</dd>
						      <dt>Descripción</dt>
						      <dd>".$total['descripcion']."</dd>
						      <dt>Ubicación</dt>
						      <dd>".$total['direccion']."</dd>
						    </dl>
						    	</a>
						    </li>";
						}
					}else{
						echo "No hay resultados para mostrar";
					}
				}


					if ($aficion != "") {
						if ($datos > 0) {
							# code...
						
							foreach ($items as $total) {
								if ($aficion == $total->aficion) {
							echo "<li class='list-group-item'>
						    	<a href='Detallesevento.php' class='list-group-item'>
						      	<h2>".$total->nombre."</h2>
						      	<dl class='dl-horizontal'>
						      <dt>Usuario:</dt>
						      <dd>".$total->Usuario."</dd>
						      <dt>Afición:</dt>
						      <dd>".$total->aficion."</dd>
						      <dt>Descripción</dt>
						      <dd>".$total->descripcion."</dd>
						      <dt>Ubicación</dt>
						      <dd>".$total->Ubi."</dd>
						    </dl>
						    	</a>
						    </li>";
						}
						}
					}else{
						echo "no hay resultados para mostrar";
					}
				}
		  	 ?>
		  	 </ul>
		  	 </div>
		  	 <div class="list-busqueda" style="display: none;">
		  	 	
		  	 </div>
		  	 </div>
    <style>
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

.pagination a.active {
    background-color: dodgerblue;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>


<!--<center>
<div class="pagination">
  <a href="#">&laquo;</a>
  <a class="active" href="#">1</a>
  <a  href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
</center>-->
  

	<!-- Footer -->
	<?php include("footer.php"); ?> 
</body>
</html>
