<?php
$libros = simplexml_load_file("biblioteca.xml");
foreach($libros as $libro)
{
echo "Autor: " . $libro->autor; echo "<br>";
echo "Artista: " . $libro->titulo; echo "<br>";
echo "Año: " . $libro->anio; echo "<br>"; echo "<br>";
echo "Editorial: " . $libro->editorial; echo "<br>";
echo "Clasificacion: " . $libro->clasificacion; echo "<br>";
echo "Idioma: " . $libro->idioma; echo "<br>"; echo "<br>";
echo "Precio en Euros: " . $libro->precio; echo "<br>"; echo "<br>";
}
 
?>