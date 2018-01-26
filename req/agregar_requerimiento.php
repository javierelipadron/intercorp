<?PHP

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Toma de Requerimientos para Diseño Web</title>
<script type="text/javascript" language="javascript" src="js/colorPicker.js"></script>
<link rel="stylesheet" href="css/colorPicker.css" type="text/css"></link>
<style>
#h1{
	background-color:#333333; color:#FFFFFF; margin:-10px; margin-left:-50px; padding:10px;  
	-moz-box-shadow: 2px 2px 3px #666;
	-webkit-box-shadow: 2px 2px 3px #666;
	box-shadow: 2px 2px 3px #666;
	border-bottom:1px solid #fff;
}

</style>

</head>';

 error_reporting(0);
//http://www.phpbb.com/community/viewtopic.php?f=64&t=616835
// solucion para el error: Warning: stream_socket_enable_crypto() [streams.crypto]: this stream does not support SSL/crypto
// Instalar la extension en php5: Openssl

	function cmd( $str, $report=true )
	{
		global $smtp;
		$ret = fwrite( $smtp, $str."\r\n" );
		if( $report === true )
			fread( $smtp, 512 );
	}
	
	
	include ("util/conexion.php");
		$sql ="insert into requerimiento values(null,
		'".$_POST['empresa']."',
		'".$_POST['persona_contacto']."',
		'".$_POST['dominio1']."',
		'".$_POST['dominio2']."',
		'".$_POST['dominio3']."',
		'".$_POST['color_primario']."',
		'".$_POST['color_secundario']."',
		'".$_POST['color_terciario']."',
		'".$_POST['color_fondo']."',
		'".$_POST['link1']."',
		'".$_POST['dlink1']."',
		'".$_POST['link2']."',
		'".$_POST['dlink2']."',
		'".$_POST['link3']."',
		'".$_POST['dlink3']."',
		'".$_POST['link4']."',
		'".$_POST['dlink4']."',
		'".$_POST['link5']."',
		'".$_POST['dlink5']."',
		'".$_POST['link6']."',
		'".$_POST['dlink6']."',
		'".$_POST['link7']."',
		'".$_POST['dlink7']."',
		'".$_POST['link8']."',
		'".$_POST['dlink8']."',
		'".$_POST['comentario']."',1)";
		
		mysql_query($sql);
		
		echo '<h1 id="h1" align="center" > 
				 Toma de Requerimientos para Diseño Web </h1>
				<br/>';
		echo "<div style='margin:50px; text-align:center'>";
			echo "<img src='images/save.png' />";
			echo "<h2>¡ Hemos Recibido sus Requerimientos !</h2>";
			echo "<p>Gracias por enviarnos la informaci&oacute;n, comenzaremos a trabajar. Estaremos informandole proximamente sobre el avance de su proyecto.</p>";
			
		echo "</div>";
		
		echo "<div style='margin:20px; text-align:left'>";
			echo "<h3>Recuerde: </h3>";
			echo "<p> Para mejorar nuestro tiempo de respuesta, es necesario que nos envie la siguiente informaci&oacute;n: </p>";
			
			echo "<img src='images/li1.png' /> Logo de su Empresa ";echo "<br/>";
			echo "<img src='images/li2.png' /> Contenido o informaci&oacute;n de cada Link del sitio web.";
			echo "<br/>";
			echo "<img src='images/li3.png' /> Documentos PDF, DOC u otros que apliquen seg&uacute;n las necesidades de su empresa.
			<span style='color:red'>(*)</span>";
			echo "<br/>";
			echo "<img src='images/li4.png' /> Twitter o Facebook si han sido creados anteriormente <span style='color:red'>(*)</span>";
			echo "<br/><br/>";
			echo "<span style='color:red'>(*) Estos items dependen de si esta informaci&oacute;n sera insertada en el sitio web. </span>";
			
		
		
		
$smtp = fsockopen( "tcp://smtp.gmail.com", 587, $errno, $errstr );
if( ! $smtp )
    die( "Lo sentimos, pero ha ocurrido un error:" );
	fread( $smtp, 512 );
	cmd( "EHLO {smtp.gmail.com}" );
	cmd( "STARTTLS" );
	stream_socket_enable_crypto( $smtp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT );
	//stream_socket_enable_crypto( $smtp, true, STREAM_CRYPTO_METHOD_SSLv2_CLIENT );
	//stream_socket_enable_crypto( $smtp, true, STREAM_CRYPTO_METHOD_SSLv3_CLIENT);
	//stream_socket_enable_crypto( $smtp, true, STREAM_CRYPTO_METHOD_SSLv23_CLIENT);
	cmd( "EHLO {smtp.gmail.com}" );    
	cmd( "AUTH LOGIN" );
	cmd( base64_encode( "mensajeriaweb" ) );
	cmd( base64_encode( "18256965" ) );
	cmd( "MAIL FROM: <mensajeriaweb@gmail.com>" );
	cmd("RCPT TO: <webcorp.ve@gmail.com>" );
	cmd("RCPT TO: <in@ercorpca@gmail.com>" );
	
	
	
	
cmd( "DATA" );
//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UFT-8\r\n";

//dirección del remitente
$headers .= "From: REQUERIMIENTOS DE PAGINA WEB \r\n";


//direcciones que recibián copia
$headers .= "Subject: REQUERIMIENTOS WEB ENVIADO -  INTER-CORPORACIONES C.A \n";

//direcciones que recibirán copia oculta
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 
cmd( $headers, false );
//cmd( "From: Diseño y Desarrollo de Aplicaciones Web ", false );
//cmd( "To: javiereli.padron@hotmail.com", false );
//cmd( "Subject: Desarrollo de Aplicaciones Web . Javier E. Padron - Contacto"."", false );
cmd("<h2>Requerimientos de Diseno Pagina Web:</h2> " .
	 "<h2> Datos Personales </h2>
	 <p><b>Empresa:</b> ".$_POST['empresa'] . "<br />" .
	 "<b>Persona de Contacto:</b> ".$_POST['persona_contacto'] . 
	 "</p>" .
	 
	 "<h2> 1. Seleccion de Dominio </h2> " . 
	 
	 "<p><b> 1ra Opci&oacute;n: </b> ".$_POST['dominio1'] . "<br />" .
	 "<b> 2da Opci&oacute;n: </b> ".$_POST['dominio2'] . "<br />" .
	 "<b> 3ra Opci&oacute;n: </b> ".$_POST['dominio3'] . "<br />" .
	 "</p>" .
	 
	 "<h2> 2. Definici&oacute;n de Colores </h2> " .
	  
	 "<b>Color Primario:</b> ".$_POST['color_primario'] . 
	 " <span style='background-color:". $_POST['color_primario'] .";width:100px;' />"     . "<br/>" .
	 "<b>Color Secundario:</b> ".$_POST['color_secundario'] . 
	 " <span style='background-color:". $_POST['color_secundario'] .";width:100px;' />" . "<br/>" .
	 "<b>Color Terciario:</b> ".$_POST['color_terciario'] . 
	 " <span style='background-color:". $_POST['color_terciario'] .";width:100px;' />"  . "<br/>" .
	  "<b>Color Fondo:</b> ".$_POST['color_fondo'] . 
	 " <span style='background-color:". $_POST['color_fondo'] .";width:100px;' />"  . "<br/>" .
	 
	 
	  "<h2> 3. Links de su sitio Web </h2> " . 
	 
	 "<p><b> Nombre del 1er Link </b> ".$_POST['link1'] . "  <b>Descripcion:</b> " . $_POST['dlink1'] . "  <br />" .
	 "<p><b> Nombre del 2do Link </b> ".$_POST['link2'] . "  <b>Descripcion:</b> " . $_POST['dlink2'] . "  <br />" .
	 "<p><b> Nombre del 3er Link </b> ".$_POST['link3'] . "  <b>Descripcion:</b> " . $_POST['dlink3'] . "  <br />" .
	 "<p><b> Nombre del 4to Link </b> ".$_POST['link4'] . "  <b>Descripcion:</b> " . $_POST['dlink4'] . "  <br />" .
	 "<p><b> Nombre del 5to Link </b> ".$_POST['link5'] . "  <b>Descripcion:</b> " . $_POST['dlink5'] . "  <br />" .
	 "<p><b> Nombre del 6to Link </b> ".$_POST['link6'] . "  <b>Descripcion:</b> " . $_POST['dlink6'] . "  <br />" .
	 "<p><b> Nombre del 7mo Link </b> ".$_POST['link7'] . "  <b>Descripcion:</b> " . $_POST['dlink7'] . "  <br />" .
	 "<p><b> Nombre del 8vo Link </b> ".$_POST['link8'] . "  <b>Descripcion:</b> " . $_POST['dlink8'] . "  <br />" .
	 "</p>" .
	 
	  "<h2> 4. Comentarios </h2> " .$_POST['comentario'] , false );

cmd( "." );
cmd( "QUIT" );
fclose( $smtp );


?> 

