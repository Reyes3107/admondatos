<?php

require_once('./ClassContacto.php');

$archivo_json = "agenda.json";

$contacto1 = new Contacto(
    "Rapido y Furioso",
    "Accion",
    "1h 38m",
    "R",
    "Vin Diesel, Paul Walker "
    
 );

$contacto2 = new Contacto(
    "Dragon ball z",
    "Animacion",
    "1h 30m",
    "A",
    "Goku, vegeta"

);

$contactos = array();

$contactos[] = $contacto1;

$contactos[] = $contacto2;

$json_string = json_encode($contactos);

$arch = fopen($archivo_json,'w');
if( $arch == false ) {
    echo ( "Error al abrir el archivo" );
    exit();
}

fwrite($arch,$json_string);

fclose($arch);

echo '<h3>Datos escritos en agenda.json </h3>';

header("refresh:2;url=mostrar_json.php");