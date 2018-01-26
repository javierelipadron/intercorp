<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php 
	include("util/title.php")
	?>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
 

    <!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
	$.src='//v2.zopim.com/?1LA7fJJKcjdaw4ZE29ecEN6D7brebjuX';z.t=+new Date;$.
	type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
	</script>
	
	
	
	<style>
		
		
		
		#comentario{  height:200px; font-size:14px}
		
		#h1{
			background-color:#333333; color:#FFFFFF; margin:-20px; margin-left:-50px; padding:10px;  
			-moz-box-shadow: 2px 2px 3px #666;
			-webkit-box-shadow: 2px 2px 3px #666;
			box-shadow: 2px 2px 3px #666;
			border-bottom:1px solid #fff;
		}
		
		</style>
		
	<!--End of Zopim Live Chat Script-->
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                     <div class="col-sm-6 col-xs-4">
                       
                          <?php
                             include("util/telefono.php");
                            ?>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                             <?php
                           	 include("util/social-network.php");
                            ?>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <?php
					include("util/menu-principal.php");
					?>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->

    <section class="header_tittle">
        
        	

	<div class="container" >
		<form action="agregar_requerimiento.php" method="post">
		<div class="row" >
		
		<h2>Hoja de Requerimientos para Diseño de Página Web</h2>
			<p> Esta hoja ha sido diseñada para que nuestros clientes envien los requerimientos de su pagina web, una vez que este ha realizado la compra de uno de nuestros productos. 
			 Por favor coloque los datos pertinentes relacionados con su sitio web, y al finalizar presione el boton <b>"Enviar Requerimientos"</b>.</p>
			
			<h2><img src="images/0.png"/> Datos Personales </h2>
	
			<div class="col-sm-6">
			<b> Empresa</b> 
			<input type="text" name="empresa" class="form-control" required="required" >
			</div>
			<div class="col-sm-6">
			<b>Persona de Contacto</b>
			<input type="text" name="persona_contacto" class="form-control" required="required">
			
			</div>
			
		</div>
		
		<div class="row" >
		<br>

			<h2><img src="images/1.png"/> 1. Seleccion de Dominio </h2>
			<p> Seleccione el dominio que usted desea para su sitio web, este puede ser .COM ó .COM.VE. Se le dan 3 opciones en caso de que el dado como 1ra opci&oacute;n no este disponible.</p>
			<div class="col-sm-4">
			<b>1ra Opcion </b>
			<input type="text" id="dominio1" name="dominio1"   class="form-control"  > 
			</div>
			<div class="col-sm-4">
			<b> 2da Opcion </b>
			<b> <input type="text" id="dominio2" name="dominio2"  class="form-control" > </b>
			</div>
			<div class="col-sm-4">
			<b> 3ra Opcion </b>
			<b> <input type="text" id="dominio3" name="dominio3"  class="form-control" > </b>
			</div>
		</div>
		<div class="row" >
			<h2><img src="images/2.png"/> 2. Definicion de Colores </h2>
	
			<p> Seleccione los colores que desea sean incluidos en su sitio web:</p>
			<div class="col-sm-3">
			<b> Color Principal </b>
			 <input type="color" id="color_primario" value="#fff" name="color_primario" style="height:50px" class="form-control"> 
			</div>
			<div class="col-sm-3">
			<b> Color Secundario </b>
			<input type="color" id="color_secundario" value="#fff" name="color_secundario" style="height:50px"  class="form-control"> 
			</div>
			<div class="col-sm-3">
			<b> Color Terciario </b>
			<input type="color" id="color_terciario" value="#fff" name="color_terciario" style="height:50px" class="form-control">
			</div>
			<div class="col-sm-3">
			<b> Color de Fondo de su Web </b>
			<input type="color" id="color_fondo" name="color_fondo"  value="#fff"  style="height:50px" class="form-control">
			</div>
		</div>
		
		<div class="row" >
		<br>

			<h2> <img src="images/3.png"/> 3.  Links de su sitio Web </h2>
			
			<p> Escriba los Link principales del menu principal de su sitio web, por defecto hemos colocado <i>Inicio</i> como pagina principal y <i>Contacto</i>:</p>
			<div class="col-sm-6">
				<b> Nombre 1do Link </b>
				<input type="text" id="link1" name="link1" value="Inicio" class="form-control"> 
			</div>
			<div class="col-sm-6">
				<b>Descripcion </b>
				 <textarea id="dlink1" name="dlink1" class="form-control"> </textarea>
			</div>
			
			<div class="col-sm-6">
				<b> Nombre 2do Link </b>
				<input type="text" id="link2" name="link2" value="" class="form-control"> 
				</div>
			<div class="col-sm-6">
				<b>Descripcion </b>
				 <textarea id="dlink2" name="dlink2" class="form-control"> </textarea>
			</div>
			
			<div class="col-sm-6">
				<b> Nombre 3er Link </b>
				<input type="text" id="link3" name="link3" value="" class="form-control"> 
				</div>
				<div class="col-sm-6">
				<b>Descripcion </b>
				 <textarea id="dlink3" name="dlink3" class="form-control"> </textarea>
			</div>
			
			<div class="col-sm-6">
			
				<b> Nombre 4to Link </b>
				<input type="text" id="link4" name="link4" value="" class="form-control"> 
				</div>
				<div class="col-sm-6">
				<b>Descripcion </b>
				 <textarea id="dlink4" name="dlink4" class="form-control"> </textarea>
			</div>
			
			<div class="col-sm-6">
				<b> Nombre 5to Link </b>
				<input type="text" id="link5" name="link5" value="" class="form-control"> 
				</div>
				<div class="col-sm-6">
				<b>Descripcion </b>
				 <textarea id="dlink5" name="dlink5" class="form-control"> </textarea>
			</div>
			
			<div class="col-sm-6">
				<b> Nombre 6to Link </b>
				<input type="text" id="link6" name="link6" value="" class="form-control"> 
				</div>
				<div class="col-sm-6">
				<b>Descripcion </b>
				 <textarea id="dlink6" name="dlink6" class="form-control"> </textarea>
			</div>
			
			<div class="col-sm-6">
				<b> Nombre 7mo Link </b>
				<input type="text" id="link7" name="link7" value="" class="form-control"> 
				</div>
				<div class="col-sm-6">
				<b>Descripcion </b>
				 <textarea id="dlink7" name="dlink7" class="form-control"> </textarea>
			</div>
			
			<div class="col-sm-6">
				<b> Nombre 8vo Link </b>
				<input type="text" id="link8" name="link8" value="Contacto" class="form-control"> 
				</div>
				<div class="col-sm-6">
				<b>Descripcion </b>
				 <textarea id="dlink8" name="dlink8" class="form-control"> </textarea>
			</div>
	
	
	</div>
	<div class="row" >
		<br>

		<div class="col-sm-12">
		<h2> <img src="images/4.png"/> 4.  Comentarios sobre el proyecto </h2>
			<textarea id="comentario" name="comentario"  class="form-control" > </textarea> 
		<input id="submit" type="submit" value="Enviar Requerimientos" class="btn btn-primary btn-lg" required="required" src="images/4.png" />
		</div>
	</div>
</form>
		

	
		</div>
		<br/>			

			

			

				
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
	

    <footer id="footer" class="midnight-blue">
        	 <?php
                 include("util/footer.php");
             ?>
    </footer><!--/#footer-->
	<script type="text/javascript" language="javascript" src="js/colorPicker.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/colorPicker.css" type="text/css"></link>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
	
	
</body>
</html>