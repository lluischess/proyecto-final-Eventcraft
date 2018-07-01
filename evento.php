<?php 

$xml = simplexml_load_file("listado.xml");

foreach ($xml->evento as $nodo) 
	{
		echo $nodo->title;
	}
?>