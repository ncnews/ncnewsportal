<?php 

// EJEMPLO DE CONSULTA DE SELECCIÓN DE REGISTROS
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


$consulta = " UPDATE $dbTabla SET autor='$autor', dia='$dia', fecha='$fecha', hora='$hora', titulo='$titulo', imagen='$imagen', texto='$texto' WHERE id = $_REQUEST[id]";
$result = $db->query($consulta);
if (!$result) {
    print "    <p>No se pudo realizar la modificación.</p>\n";
    print "    <p><a href='modificar.html'>regresar</a></p>\n";
    
} else {
	print "    <p>La actualización se realizo con exito.</p>\n";
	print "    <p><a href='modificar.html'>regresar</a></p>\n";
    //foreach ($result as $valor) {
       
    //   print "    <p>$valor[nombre] $valor[apellidos] $valor[sexo] $valor[edad] $valor[dirección]</p>\n"; 
        
    //}
}

$db = null;
?>