<?php 

// EJEMPLO DE CONSULTA DE SELECCIÓN DE REGISTROS
require_once "biblioteca.php";
$db = conectaDB();

$dbTabla="Noticia";

$consulta = "SELECT * FROM $dbTabla";
$result = $db->query($consulta);
if (!$result) {
    print "    <p>Error en la consulta.</p>\n";
    print "    <p><a href='home.html'>regresar</a></p>\n";
} else {
    foreach ($result as $valor) {
       
       print "    <p>$valor[id_noticia]-$valor[autor] $valor[dia] $valor[fecha] $valor[hora] $valor[titulo] $valor[imagen] $valor[texto]</p>\n"; 
        
    }
    print "    <p><a href='home.html'>regresar</a></p>\n";
}

$db = null;
?>