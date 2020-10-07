<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viwport" content="width, initial-scale=1.0">
    <title>Leyendo linea a linea</title>
    <style media="screen">
      .cuerpo{
        background-color: #FFF2CC;
        margin: 1rem;
        margin-left: 2rem;
        margin-right: 60%;
        padding: 1rem;
        border: 2px solid #ccc;
        font-family: Arial;
      }
    </style>
</head>

<body>
  <div class="cuerpo">
    <?php
    $archivo = array();
    $miArchivo = fopen("datos.txt", "r")
       or die("No se puede abrir el archivo!");
       //leemos el archivo linea por linea
      while (!feof($miArchivo)) {
          //Añadimos cada linea del archivo en un array
          array_push($archivo, floatval(fgets($miArchivo)));
    }
    // cerramos el archivo
    fclose($miArchivo);
$promedio=0;
echo "Estos son los pH recolectados: <br>";
//Buscamos todos los archivos del array para sacar la media
foreach($archivo as $v) {
    $promedio=floatval($v)+$promedio;
    echo $v . "<br>";
}
$promedio=$promedio/sizeof($archivo);
//La función round sirve para redondear las decimales
echo "<br>La media fue de: ".round($promedio,2) ."<br>";
$Grande=max($archivo);
$Peque=min($archivo);
$Grande=floatval($Grande);
$Peque=floatval($Peque);
if($Grande > $promedio){
  $ResultadoG=$Grande-$promedio;
  echo "El resultado de G - M es: ".round($ResultadoG,2)."<br>";
}else{
  $ResultadoG=$promedio-$Grande;
  echo "El resultado de G - M es: ".round($ResultadoG,2)."<br>";
}
if($Peque  <  $promedio){
  $ResultadoP=$promedio-$Peque;
  echo "El resultado de P - M es: ".round($ResultadoP,2)."<br>";
}else{
  $ResultadoP=$Peque-$promedio;
  echo "El resultado de P - M es: ".round($ResultadoP,2)."<br>";
}
if($ResultadoG > $ResultadoP){
  echo "<br>".round($ResultadoG,2)." Es mayor que ".round($ResultadoP,2)." por lo tanto<br>";
  echo "el más alejado es G = ".$Grande. "<br>";
  $punto=$Grande;
}else{
  echo "<br>".round($ResultadoP,2)." Es mayor que ".round($ResultadoG,2)." por lo tanto<br>";
  echo "el más alejado es P = ".$Peque. "<br>";
  $punto=$Peque;
}
echo "<br>Los nuevos pH son:<br> ";
$archivo1 = array();
$promedioN=0;

foreach ($archivo as $v) {
    //Buscamos cual fue el valor más lejano a la media.
    if($v != $punto){
      array_push($archivo1, $v);
      $promedioN=floatval($v)+$promedioN;
    }
}
foreach ($archivo1 as $v) {
    echo $v . "<br>";
}
$promedioN=$promedioN/sizeof($archivo1);
echo "<br>La nueva media es ".round($promedioN,2)
    ?>
  </div>
</body>

</html>
