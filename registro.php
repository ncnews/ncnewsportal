<?php 

// EJEMPLO DE CONSULTA REGISTROS
require_once "biblioteca.php";
$db = conectaDB();

$dbTabla="Noticia";

$id=$_REQUEST['id'];
$autor=$_REQUEST['autor'];
$dia=$_REQUEST['dia'];
$fecha=$_REQUEST['fecha'];
$hora=$_REQUEST['hora'];
$titulo=$_REQUEST['titulo'];
$imagen=$_REQUEST['imagen'];
$texto=$_REQUEST['texto'];

$consulta = "INSERT INTO $dbTabla
	(id_noticia, autor, dia, fecha, hora, titulo, imagen, texto)
		VALUES ('$id', '$autor', '$dia', '$fecha', '$hora', '$titulo', '$imagen', '$texto')";

$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "El archivo ".  basename( $_FILES['uploadedfile']['name']). 
    " ha sido subido";
} else{
    echo "Ha ocurrido un error, trate de nuevo!";
}

$result = $db->query($consulta);

if (!$result) {
    print "    <p>Error en la consulta.</p>\n";
    print "    <p><a href='registro.html'>regresar</a></p>\n";
} else {
	print "    <p>Registro creado correctamente.</p>\n";
	print "    <p><a href='registro.html'>regresar</a></p>\n";
    //foreach ($result as $valor) {
    //print "    <p>$valor[id] - $valor[nombre] $valor[apellidos] $valor[sexo] $valor[edad] $valor[dirección]</p>\n";
    //}
}

$db = null;
?>