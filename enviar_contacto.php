<?php session_start(); ?>
<?php


					$to = "intercorpca@gmail.com"; 
					$email_subject = "INTERCORP WEBSITE :: MENSAJE DE CONTACTO / " . $_POST['nombre'];
					$email_body = "<h2>Mensaje enviado desde www.softwaremedico.com.ve </h2> 
					<p>Este mensaje ha sido enviado desde tu sitio web: </p>
					<p><b>Nombre:</b> ". $_POST['nombre'] . "<br /> 
					<b>Correo:</b> ". $_POST['email'] . "<br /> 
					<b>Telefono:</b> ". $_POST['telefono'] ."<br /></p> 
					<p><b> Mensaje: </b> ". $_POST['mensaje'] ." </p>"; 
						
					$headers =    "MIME-Versin: 1.0\r\n" . 
								   "Content-type: text/html; charset=iso-8859-1; format=flowed\r\n" . 
								   "Content-Transfer-Encoding: 8bit\r\n" . 
								   "From: info@intercorp.com.ve\r\n" . 
									"Reply: info@intercorp.com.ve\r\n".
								   "Return-Path: info@intercorp.com.ve\r\n".
								   "X-Mailer: PHP" . phpversion(); 

					mail($to,$email_subject,$email_body,$headers);
							


					header("location:index.php");
	
?> 
