<?php 
// Función para comprobar que el usuario existe en la carpeta donde se guardan.
function conectar_usuarios($nombre_usuario, $password_usuario) {
$RESULTADO = FALSE;
 
//Miramos que los campos no esten vacios
if($nombre_usuario == '' || $password_usuario == '') {
$RESULTADO = FALSE;
}
$ubicacion_usuarios = 'user/usuarios.php';
$contenido_usuarios = file_get_contents($ubicacion_usuarios);
$array_todos_usuarios = explode('||', $contenido_usuarios);
foreach ($array_todos_usuarios as $usuario_individual) {
$datos_del_usuario = explode('|', $usuario_individual);
if(isset($datos_del_usuario[2]) && $nombre_usuario == $datos_del_usuario[2] && $password_usuario == $datos_del_usuario[3]) {
	$RESULTADO = TRUE;
	break;
}

}

return $RESULTADO;
}

 ?>


