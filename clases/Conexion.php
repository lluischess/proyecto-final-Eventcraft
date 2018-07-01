<?php 

class Conexion extends mysqli{

	public  function __construct(){
		parent::__construct('localhost','root','','eventcraft',"3307"); // Conexion a la base de datos
		$this->query("SET NAMES 'utf8';");
		$this->connect_errno ? die('ERROR: Conexion fallida ') : null; // si da error se compacta
	}

	// array 
	public  function recorrer($y){
		return mysqli_fetch_array($y);
	}
	
	public  function liberar($y){
		return mysqli_free_result($y);
	}

	/*Para devolver las filas  encontradas de la base de datos*/
	public  function  rows($y){
		return mysqli_num_rows($y);

	}

}

?>