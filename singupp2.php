<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Sing Up</title>
		<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/listbox.css">
		<!-- Icomoon Icon Fonts -->
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
		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- Modernizr JS -->
		<script src="js/listbox.js"></script>
		<!-- Menu -->
	<?php include("Menu.php");

		$json = 'Aficiones.json'; 
		$data = file_get_contents($json); 
		$items = json_decode($data);

	 ?>
	</head>
	<body>
		

		<br>
		<br>

		<div id="gtco-subscribe">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Elige tus aficiones de interes</h2>
						<p>Elige </p>
					</div>
				</div>

				<!-- Aficiones  -->
				<div class="listbox-area">
          <div class="left-area">
            <span id="ms_av_l">Aficiones Disponibles:</span>
            <ul id="ms_imp_list" tabindex="0" role="listbox">
            	<center>
            	<?php 

            	$selectet = false;
            	$cont = 1;
									
		  								foreach ($items as $total) {

											  echo "<li id='event".$cont."'  role='option' aria-selected='".$selectet."'><input type='checkbox' name='ch".$cont."'>".$total->name ."</li>";
						     		 				$cont = $cont + 1;
						     		 		
										}
								  	 ?>
								  	


             </center>
          </div>
				   <center>
					    <br>
					    <br>
						    <button type="submit" class="btn btn-default">
						    	<!-- <?php 
						    // 	$datos
						    // 	$contt = 0;
						    // 	foreach ($items as $total) {
						    // 				isset($_POST['ch'.$cont])
										// 	  $datos[$contt] = $_POST['ch'.$cont];
						    				
						    //  		 		$contt = $contt + 1;
										// }

						    	 ?> -->
						    Finalizar</button></center>
				
			</div>
		</div>
	</body>
</html>