// Jesus Roberto Estrada Diaz
// 17231071
// Practica 1.3b
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leyendo linea a linea</title>
    </head>
    <body>
        <?php 
            // Tratamos de abrir el archivo, si no se puede 
            // mandamos un mensaje: no se puede abrir... 
            $miArchivo = fopen("miDiccionario.txt", "r") 
                or die("No se puede abrir el archivo!"); 
            
            // Utilizamos un ciclo while para recorrer línea a línea 
            // el archivo mientras no sea fin de archivo 
            // y obtenemos dicha línea y la mostramos 
            while (!feof($miArchivo)) { 
                echo fgets($miArchivo) . "<br>"; 
            } 
            
            // cerramos el archivo 
            fclose($miArchivo); 
            ?>
    </body>
</html>
