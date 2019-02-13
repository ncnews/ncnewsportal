<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<title>Consultar</title>
		<meta http-equiv="Content-Language" content="Spanish" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

	</head>

	<body>

		<div id="wrap">

			<div id="header">
				<h1><a href="#">Power Lab</a></h1>
				<h2>Sistema de Alta de Noticias</h2>
			</div>
		


			<div id="content">

				<div class="left"> 

					<h2><a href="#"> Consulta a la Base de Datos </a></h2>
					
					<div class="articles">
						<?php
						
							// EJEMPLO DE CONSULTA DE SELECCIÓN DE REGISTROS
							require_once "biblioteca.php";
							$db = conectaDB();

							$dbTabla="Noticia";

							$consulta = "SELECT * FROM $dbTabla";
							$result = $db->query($consulta);
							if (!$result) {
							    print "    <p>Error en la consulta.</p>\n";
							} else {
							    foreach ($result as $valor) {
							       
							       print "    <p>$valor[id_noticia]-$valor[autor] $valor[dia] $valor[fecha] $valor[hora] $valor[titulo] $valor[imagen] $valor[texto]</p>\n"; 
							        
							    }
							}

							$db = null;

						?>
					</div>
					
				</div>

				<div class="right"> 

					<h2> Navegación: </h2>
							<a href="home.html">Home</a>
							<a href="consultar.php">\Consultar</a>
					<h2> Menu: </h2>
					<ul>

						<li><a href="home.html">Inicio</a></li> 
						<li><a href="consultar.php">Consutar</a></li> 
						<li><a href="registro.html">Registro</a></li> 
						<li><a href="modificar.html">Modificar</a></li> 
						<li><a href="eliminar.html">Eliminar</a></li> 
						<li><a href="contactanos.html">Contáctanos</a></li> 
						
					</ul>

				</div>
			
				<div style="clear: both;">
				
				</div>

			</div>

			<div id="footer">
				Designed by <a href="http://www.free-css-templates.com/">Free CSS Templates</a>, Thanks to <a href="http://www.openwebdesign.org/">openwebdesign</a>
			</div>

		</div>

	</body>

</html>