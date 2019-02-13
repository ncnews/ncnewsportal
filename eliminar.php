<?php 

// EJEMPLO DE CONSULTA DE SELECCIÓN DE REGISTROS
require_once "biblioteca.php";
$db = conectaDB();

$dbTabla="Noticia";

$consulta = "DELETE FROM $dbTabla WHERE id = $_REQUEST[id]";
$result = $db->query($consulta);
if (!$result) {
    print "    <p>No se pudo eliminar el registro.</p>\n";
    print "    <p><a href='eliminar.html'>regresar</a></p>\n";
} else {
    //foreach ($result as $valor) {
       print "	  El registro fue eliminado.";
       print "    <p><a href='eliminar.html'>regresar</a></p>\n";
    //}
}

$db = null;
?>