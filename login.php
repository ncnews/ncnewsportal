<?php 

// EJEMPLO DE CONSULTA DE SELECCIÓN DE REGISTROS
require_once "biblioteca.php";
$db = conectaDB();
$dbTabla="Personal";

$usuario=$_REQUEST['user'];
$contraseña=$_REQUEST['pass'];
$consulta = "SELECT * FROM $dbTabla WHERE usuario='$usuario' AND contraseña='$contraseña'";
$result = $db->query($consulta);
$u="";
$p="";
forEach( $db->query($consulta) as $row){

$u = $row['usuario'];
$p = $row['contraseña'];
}

if (strcmp($u,$usuario)===0 && strcmp($p,$contraseña)===0) {
    header('Location: home.html');
} else {
    print "    <p>El usuario o contraseña no coinciden.</p>\n";
    print "    <p><a href='login.html'>regresar</a></p>\n";
}

$db = null;
?>