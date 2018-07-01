<?php 
// Iniciamos la sesion
session_start();

$Nombre = $_POST['Nombre'];
$Password = $_POST['Password'];
// Encriptamos la contraseña
$md5_pass = md5($Password);
require_once 'entrarusuarios.php';
// Si las comprobaciones son correctas Iniciamos la sesión
if(conectar_usuarios($Nombre, $md5_pass)) {
$INGRESO_DE_SESION = TRUE;
$_SESSION['Nombre'] = "$Nombre";
$_SESSION['Password'] = "$md5_pass";
header('Location:index.php');
} else {
$INGRESO_DE_SESION = FALSE;
header('location:login.php?ERROR=1');
include("login.php");


}
?>
