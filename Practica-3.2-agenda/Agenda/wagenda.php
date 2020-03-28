<?php
//Establecemos que el nombre de la agenda será agenda.csv
// trabajaremos también sin el registro de cabecera en el archivo csv
$nombreAgenda = "agenda.csv";
//obtenemos los datos del formulario y los capturamos en una lista propia
//empezamos construyendo la lista
$Registro = array();
//verificamos si existe el archivo agenda.csv,
//para saber que numero de registro poner en
//si no existe entonces son cero lineas
if (file_exists($nombreAgenda)){
    $numLineas = count(file($nombreAgenda));
}
else{
    $numLineas = 0;
}
//capturamos datos
$Registro[] = $numLineas+1;
$Registro[]=$_POST['nombre'];
$Registro[]=$_POST['apellidos'];
$Registro[]=$_POST['fnacimiento'];
$Registro[]=$_POST['estadocivil'];
$Registro[]=$_POST['origen'];
$Registro[]=$_POST['correo'];
$Registro[]=$_POST['redess'];
//abrimos el archivo de la agenda para agregar registro
$fp = fopen($nombreAgenda,"a") or die ("No se puede abrir el archivo: $nombreAgenda");
//escribiendo en el archivo CSV
$resp = fputcsv($fp, $Registro, ',', '"', '"');
if ($resp === false) {
die("Error al escribir en CSV");
}
//cerramos el archivo
fclose($fp) or die("No se puede cerrar el archivo: $nombreAgenda");
//enviamos mensaje
echo ("<h1> Se agregó el contacto a la agenda: $nombreAgenda </h1> ");
// redireccionamos a la página donde se muestren los contactos después de pasar 3 segundos
header("refresh:3; url=contactos.php");