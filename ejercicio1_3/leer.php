// Jesus Roberto Estrada Diaz
// 17231071
// Practica 1.3
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA_Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php 
            $nombreArchivo = "lorem.txt"; 
            $archivo = fopen ($nombreArchivo, "r" ); //abrimos archivo 
            
            if( $archivo == false ) { 
                echo ( "Error al abrir archivo" ); 
                exit(); 
            } 
        
            $size = filesize( $nombreArchivo ); //obtenemos tamaño del archivo 
            $elTexto_archivo = fread( $archivo, $size );//leemos contenido del archivo 
            fclose( $archivo ); //cerramos archivo 
            
            echo ( "File size : $size bytes" ); 
            echo ( "<pre>$elTexto_archivo</pre>" ); 
        ?>
    </body>
</html>
