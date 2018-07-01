# proyecto-final-Eventcraft
Proyecto web de final de curso. Tecnologias usadas: Html5 + Css3 + Php + Jquary + Ajax + Bootstrap + Mysql

Instrucciones web Eventcraft:

1)	Configuración del entorno:

-	El proyecto se tiene que ejecutar con un paquete de apache + mysql + php (Ej: wampserver)
-	En la Carpeta ‘base de datos’ tenemos una copia de la pequeña base de datos que uso para guardar eventos y usuarios( La importáis al phpmyadmin).
-	Antes de ejecutar el proyecto, seguramente no os funcionara porque yo uso el puerto de mysql 3307, lo que tendréis que hacer en este caso es abrir la carpeta del proyecto 
	Ir a la Carpeta ‘Clases’ 
	 luego abrir el archivo ‘Conexión’ 
	Por ultimo eliminar el puerto de la línea 6, exactamente esto (,"3307") con la coma incluida.

2)	Web en local lista para probar.

3)	Una última aclaración, en la base de datos la tabla (users) almacena solo el nombre del login del usuario y cada vez que el usuario participe en un evento se agregara el mismo nombre con el id del evento. (No me ha dado tiempo de controlar bien esta parte en tan poco tiempo).

