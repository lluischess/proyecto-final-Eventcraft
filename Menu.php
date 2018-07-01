<head>
  <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts  -->
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

  <?php 
  if(!isset($_SESSION)) {
session_start();

    if(isset($_POST['Nombre'])){
        $_SESSION['Nombre']=$_POST['Nombre'];
    }
   }
  else {
    session_unset();
    session_destroy();
      }
?>
  <!-- Menu TOP GLOBAL -->
<nav class="gtco-nav" role="navigation">
      <div class="gtco-container">
        <div class="row">
          <div class="col-sm-1 col-xs-12">
            <div>
              <a href="index.php">
              <img src="images/logo.png" style="width:100px;height:70px;border:0;">
              </a>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div id="gtco-logo"><a href="index.php">EVENTCRAFT</a></div>
          </div>
          <div class="col-xs-10 text-right menu-1 main-nav">
            <ul>
              <li class="active"><a href="index.php" data-nav-section="home">Inicio</a></li>
            <li><a href="events.php" class="external"">Eventos</a></li>
            <li><a href="index.php" data-nav-section="products">Precio</a></li>
            <li><a href="index.php" data-nav-section="faq">FAQ</a></li>
            <li><a href="contact.php" class="external">Contacto</a></li>

              <li>

                <?php
                $sesion = false;
                // Inicio de Sesión Simple
            if (!empty($_SESSION['Nombre']) && ($_SESSION['Nombre']<>'')){

              echo "<li> <a href='perfiluser.php'>". $_SESSION['Nombre']. "</a></li>";
              $sesion = true;

              }else{
              echo "<a>Sesión</a>";
            }
            if (empty($_SESSION['Nombre'])){

              echo "<li><a href='login.php' class='external' title='login'>Iniciar sesión</a></li>";
              $sesion = false;
             }
            else {

              echo "<li><a href='Logout.php' class='external' title='login'>Cerrar sesión</a></li>";
            }
          ?>

          <?php 
          if ($sesion == false) {
             echo '<li class="btn-cta"><a href="singup.php" class="external" title="Sing up"><span>Sign up</span></a></li>';
          }


           ?>
          
            </ul>
          </div>
        </div>
        
      </div>
    </nav>
 </head>