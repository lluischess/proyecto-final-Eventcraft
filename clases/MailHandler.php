<?php 
						     // Enviar Formulario de Contacto por mail
								if(isset($_POST['submit'])){
								    $to = "lluischess@gmail.com"; // al mail a recibir
								    $from = $_POST['c_email']; // mail del sender
								    $name = $_POST['c_name'];
								    $tema = $_POST['tema'];

								    $subject = "Formulario de Contacto";
								    $subject2 = "Copia del mensaje";
								    $message = $name . " " . $tema . " Mensaje de Contacto enviado:" . "\n\n" . $_POST['c_message'];
								    $message2 = "Copia del mensaje enviado " . $name . "\n\n" . $_POST['c_message'];

								    $headers = "Formulario de Contacto:" . $from;
								    $headers2 = "Copia Formulario de Contacto:" . $to;
								    mail($to,$subject,$message,$headers);
								    mail($from,$subject2,$message2,$headers2); // Eviamos la copia del mensaje al sender
								   
								    echo "Mensaje enviado. Muchas Gracias " . $name . ", nos pondremos en contacto con usted lo antes posible.";
								    }
								?>