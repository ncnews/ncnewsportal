<!DOCTYPE html>
<html= lang="en">
    
	<head>
		
		<meta charset="utf-8">
		<meta  name"viewport" content="whidth=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie-edge">
		<!-- Bootstrap CSS  #213E4A,#5CB85C,#355664,#2C72B3-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
		<title>Portal Noticias</title>
		<link rel="shortcut icon" href="./img/favicon.ico"/>
		<style type="text/css">
			
			.borde{

				background-color: #008CFF;
				height: 80px;
			}

			.borde1{
				background-color: aquamarine;
				height: 150px;
			}

			.fondo{

				background-color: #F6F6F6;
				height:2100px;
			}	

			.papel{

				background-color: #FFFFFF;
				height:2100px;
			}

			.base1{

				background-color: #BABFC7;
				height:200px;
			}

			.base2{

				background-color: #687786;
				height: 250px;
			}

			.base3{

				background-color: #364A5E;
				height:50px;
				font-family: sans-serif;
				font-color: #FFFFFF;
				
			}

			.pie{

				font-family: sans-serif;
				color: #FFFFFF;
				padding-top: 15px;
			}
            
            .img{
                margin: 0 370px;
		        
            }
            
            .content{
                padding: 50px;
            }
		</style>

	</head>
 
	<body>

		<div class="fondo">

			<div class="container-fluid">

				<div class="row">
					<div class="col borde fixed">
					<img src="./img/ncn.jpg" width="75px;" class="img">
					</div>
				</div>

			</div>

			<div class="container-fluid">
				
				<div class="row">

					<div class="col border">

						<ul class="nav justify-content-center">
							<li class="nav-item">
								<a class="nav-link active" href="#">Oaxaca</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">México</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Mundo</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Principal</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Deportes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Política</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Social</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Cultura</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Tecnología</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Clasificados</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Roja</a>
							</li>
						</ul>

					</div>


				</div>

				

				<div class="row">

					<div class="container border" style= "height:1900px; background-color: #FFFFFF;">
						<div>
<!-- *****************************Contenido********************************-->

<?php 

// EJEMPLO DE CONSULTA DE SELECCIÓN DE REGISTROS
require_once "biblioteca.php";
$db = conectaDB();

$dbTabla="Noticia";

$consulta = "SELECT * FROM $dbTabla";
$result = $db->query($consulta);
if (!$result) {
    print "    <p>Error en la consulta.</p>\n";
    print "    <p><a href='index.php'>regresar</a></p>\n";
} else {
    foreach ($result as $valor) {
       
       print "    <p>$valor[id]-$valor[autor] $valor[dia] $valor[fecha] $valor[hora] $valor[titulo] $valor[imagen] $valor[texto]</p>\n"; 
        
    }
    print "    <p><a href='index.php'>regresar</a></p>\n";
}

$db = null;

?>     

<!--*****************************Fin del Contenido*************************-->
						</div>
					</div>

				</div>

			</div>
		<div class="container-fluid">

				<div class="row">
					<div class="col base1 fixed"></div>
				</div>
				<div class="row">
					<div class="col base2 fixed"></div>
				</div>
				<div class="row">
					<div class="col base3 fixed"><center><p class="pie">CNC NOTICIAS es una marca registrada de PowerLab, S.A. de C.V. Todos los derechos resevados.</p></center></div>
				</div>

			</div>

		</div>
		<!--Optional JavaScript -->
		<!--jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>

	</body>

</html>
