<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Contactos</title>

</head>
    
<body>
    <!--Script php que empieza a configurar la página con los datos de la agenda -->
    <?php
    $nombreArchivo = "agenda.csv";
    $archivo = fopen($nombreArchivo, "r") or die("No se puede abrir el archivo: $nombreA
rchivo");
    $datos = array();
    ?>
<div class="container">
    <h1 class="titulo">Contactos</h1>
    <!-- encerramos la tabla en otro contenedor especial
para poder manipularla con un scroll horizontal -->
    <div class="table-responsive">
        <table class="table">
            <!-- Encabezado de tabla-->
           <thead class="thead-dark">
              <tr><!-- diseño del renglon de encabezado-->
                 <th># de contacto</th>
                 <th>Nombre</th>
                 <th>Apellidos</th>
                 <th>Fecha de nacimiento</th>
                 <th>Estado civil</th>
                 <th>Origen</th>
                 <th>Email</th>
                 <th>Redes sociales</th>
             </tr>
         </thead> <!-- Termina encabezado de tabla -->
         <!-- cuerpo de la tabla -->
         <tbody>
             <!-- Script para ir mostrando los contactos en la página-->
             <?php
             //recorremos la agenda
             while (($datos = fgetcsv($archivo, 0, ',', '"', '"')) !== false) {
                 //imprimimos el inicio del renglon de tabla HTML
                 print("<tr>");
                 foreach ($datos as $campo) {
                     //imprimimos el inicio de la celda de datos HTML
                     print("<td>");
                     //imprimimos el dato
                     print("$campo");
                     //cerramos la celda HTML
                     print("</td>");
                 }
                 //cerramos el renglon de tabla HTML
                 print("</tr>");
            }
                     ?>               

                 </tbody>
             </table>
         </div>
     </div>
        
</body>
<center>
         
         <h1><a href="index.php">"Regresar al formulario principal"</a></h1>

</center>
</html>