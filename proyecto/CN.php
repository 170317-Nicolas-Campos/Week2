<?php 
$conezion =
mysqli_conect("localhost", "root, "", "prototipe website");
if(!$conexion) {
echo'Error to conect';
}
else {
echo 'conectado a la base de datos';
}