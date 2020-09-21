<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PRACTICA 1.4</title>
    </head>
    <body>
        <?php 
            // decidimos el nombre que va a atener nuestro archivo 
            $nombreArchivo = "archivoNuevo.txt";
            
            // abrimos archivo en modo escritura 
            $archivo = fopen($nombreArchivo, "w") 
                or die("Error al abrir el nuevo archivo"); 
            
            // escribimos en el archivo un texto cualquiera de manera directa 
            fwrite($archivo, "probando, probando, si, 1, 2, 3\n");
            
            // cerramos el archivo 
            fclose($archivo);
            
            // de manera opcional leemos el contenido del archivo 
            $texto = readfile($nombreArchivo);
            echo "<div> $texto </div>";
        ?>
    </body>
</html>