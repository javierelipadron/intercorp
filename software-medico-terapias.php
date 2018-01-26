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
        
        

        	<div id="banner_control-terapy">
				<div class="row wow fadeInDown">
                    <div class="container">
                        <div class="col-lg-12 col-sm-12 col-md-12">
    					<h2 style="padding-top:80px"> &copy; Software para Control de Terapias</h2>
    					<p>Instalable en Equipos <B>Windows XP, Vista, 7 , 8 , 10 o MAC OS</B></p>
						<p>Dirigido a Especialistas, Grupos o Centros Médicos </p>
						<p>Opción avanzada de Acceso Online al software</p>
    					</div>
                    </div>
				</div>
			</div>

	<div class="container" >
		<div class="row" >
		
		
		
	        <div class="col-lg-12 col-sm-12  col-xs-12">
			
				<h2>Descripción del Sistema</h2>

				<p><b> &copy; SM Software de Control de Terapias:</b> es un sistema dirigido al control de Pagos y citas de terapias llevado por un centro de terapias. El dise&ntilde;o del sistema es amigable y sencillo de usar. </p>
				</p>
			
			
				<h2>Opciones del Sistema</h2>

				<p>El sistema contiene modulos relacionados con cada una de las acciones realizadas en la consulta.</p>
				
        		<div class="col-lg-6 col-sm-12  col-xs-12">
					<p><b>- Paciente: </b>Permite  guardar ficha Personal del paciente, datos de seguro, datos de contacto familiar del paciente.</p>
					<p><b>- Terapias: </b>Permite guardar informacion sobre las diferentes terapias existentes en el negocio, ademas permite agregar informacion sobre si es una terapia proveniente de un seguro.</p>
					<p><b>- Citas de Pacientes: </b>Permite guardar informacion las citas de cada paciente, de forma manual o segun los dias de la semana que el paciente necesite.</p>
					<p><b>- Seguros: </b>Permite guardar informacion los seguros con los que trabaja la institucion.</p>
					<p><b>- Asistencia de Pacientes: </b>Permite guardar informacion sobre el calendario de citas diario y agregar data sobre si el paciente asisti&oacute; o no.</p>
					
				</div>	
       			 <div class="col-lg-6 col-sm-12  col-xs-12">
					<p><b>- Reporte  de Terapias: </b> Reporte resumen con la informacion relacionada de cada terapia, incluyendo de forma detallada, nombre de paciente, pagos, citas a las que ha asistido y proximas citas.</p>
					<p><b>- Reporte de Pagos: </b> Permite conocer segun un rango de fechas los pagos recibidos dentro de la institucion por concepto de terapias.</p>
					<p><b>- Pagos a Terapistas: </b> Permite conocer cuantas consultas ha realizado cada terapista que trabaja dentro de la instituci&oacute;n.</p>
					<p><b>- Terapistas: </b> Permite guardar informacion sobre las personas que realizan las terapias dentro de la plataforma.</p>
					<p><b>- Administradores: </b>Permite guardar la informacion sobre las personas que tendran acceso al sistema.</p>
				</div>	
			</div>	
	</div>	
	
	<hr/>
	<div class="row" >
		
		
        <div class="col-lg-6 col-sm-12  col-xs-12">
			<h2>Seguridad</h2>
				<p> El sistema posee un area de autentificaci&oacute;n para verificar el acceso al sistema por parte de los usuarios. Dependiendo del tipo de consulta que se maneja. Existen 3 tipos de usuarios: Medico, Secretaria o Personal de Atención al Cliente, y Administracion.
				</p>
			
			<h2>Tipos de Usuarios</h2>	
			<ul>
				<li><b> Médico: </b> El medico dispondra de las opciones globales relacionadas con el area medica.</li>	
				<li><b> Secretaria:</b> Este tipo de usuario dispone de 3 opciones basicas: Pagos de cada paciente, agendar, verificar y editar Citas de la Agenda, Agregar personas a la Lista de Esperia diaria de cada Especialista.</li>	
			
				<li><b> Administrador: </b> este usuario se podra administrar los modulos configurables, y la creacion de nuevos especialistas o secretarias dentro del software.</li>	
			</ul>	
			
			<h2>Sobre la Licencia del Software:</h2>
				<p>La licencia del Software es intransferible y será instalable en el equipo de preferencia del cliente, . Si el software es destinado a mas de un especialista, los equipos se conectaran al software a traves del computador escogido como servidor.  Los  posteriores respaldos, soportes técnicos o asesorías, nuevos modulos requeridos  tendran un costo adicional.</p>
			
		</div>
	
		
        <div class="col-lg-6 col-sm-12  col-xs-12">
				
		
			<h2>Entrenamiento:</h2>
					<p>Nuestro software cuenta con tutoriales personalizados, los cuales el cliente podrá ver en el momento que desee. En caso de tener alguna duda sobre el uso podrá preguntar al personal encargado de la instalación o de soporte posterior.</p>
			
			<h2>Soporte Técnico</h2>
				<p>En caso de presentarse cualquier problema dentro del sistema, o fuera del mismo (falla del equipo en el cual se instalo el sistema), se podra poner en contacto con nuestro personal de forma de resolver dicha falla. Si la falla es del sistema, el equipo se encargará de resolverlo sin costo alguno. En otro caso el personal le informara sobre el costo, antes de resolver el problema.</p>
					
			<h2>Actualizaciones y Nuevas Versiones</h2>
				<p>Las Actualizaciones del software son aquellas nuevas funcionabilidades y opciones que lo mejoran. Estas poseen un costo adicional que le sera dado al cliente en el momento que ellas se lancen al mercado y el podra decidir si desea adecuarlas a su sistema o no.</p>
			
			<h2> Respaldo y Mantenimiento del Software</h2>
				<p>Los Respaldos del software son realizados en el periodo de tiempo que el cliente eliga, en general es recomendable realizarlo mensualmente para asegurar la data en un medio externo. Dicho respaldo dependiendo de su peso, le sera enviado via correo electronico.</p>
			
		</div>
		
		
	
		
	</div>	

		
        <br/><hr/>
        <div class="col-lg-6 col-sm-12  col-xs-12 center">
            	<a href="cotizar.php" class="btn-lg btn-primary"> Deseo una Cotizaci&oacute;n</a>
        	</div>
            <div class="col-lg-6 col-sm-12  col-xs-12 center">
            	<a href="tutoriales.php#tab6" class="btn-lg btn-success"> Videotutoriales</a>
            </div>
            <br/>
        </div>


			

				
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
	

    <footer id="footer" class="midnight-blue">
        	 <?php
                 include("util/footer.php");
             ?>
    </footer><!--/#footer-->
     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
	
</body>
</html>