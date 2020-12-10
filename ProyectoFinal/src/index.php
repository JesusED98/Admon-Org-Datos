<?php
function callWebService()
{
  $url = '../datos.json';
  $json = file_get_contents($url);
  $array = json_decode($json, true);
  return $array;
}
$resul = callWebService();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Censo televisores</title>
    <!-- ------ Libreria de las graficas ----- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js" integrity="sha512-zO8oeHCxetPn1Hd9PdDleg5Tw1bAaP0YmNvPY8CwcRyUk7d7/+nyElmFrB6f7vg4f7Fv4sui1mcep8RIEShczg==" crossorigin="anonymous"></script>
    <!-- ------ Bootstrap ----- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- ------ Estilos css ----- -->
    <link rel="stylesheet" href="estilos.css">
    <h1 align="center">Televisores/Pantallas En Una Determinada Ciudad</h1>
</head>

<body>
  <!-- ------ Navbar de la pagina ----- -->
  <nav class="navbar-dark bg-dark form-inline ">
    <button type="button" onclick="DysplayBarras()" class="btn btn-primary">Gráfica de Barras</button>
    <button type="button" onclick="DysplayLineal()" class="btn btn-primary">Gráfica Lineal</button>
    <button type="button" onclick="DysplayPastel()" class="btn btn-primary">Gráfica de Pastel</button>
  </nav>
  <!-- ------ Tabla de informacion general ----- -->
  <div class="div-header-info">
    <table class="table table-bordered">
      <thead>
        <tr class="bg-primary">
          <th scope="col" colspan="6" style="color: white; text-align: center;">Personas con Pantalla/Televisor</th>
        </tr>
        <tr>
          <th scope="row">
            <center>0 Televisores</center>
          </th>
          <th scope="row">
            <center>1 Televisor</center>
          </th>
          <th scope="row">
            <center>2 Televisores</center>
          </th>
          <th scope="row">
            <center>3 Televisores</center>
          </th>
          <th scope="row">
            <center>4 Televisores</center>
          </th>
          <th scope="row">
            <center>5 Televisores</center>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <center><?php echo $resul[0]; ?> personas</center>
          </td>
          <td>
            <center><?php echo $resul[1]; ?> personas</center>
          </td>
          <td>
            <center><?php echo $resul[2]; ?> personas</center>
          </td>
          <td>
            <center><?php echo $resul[3]; ?> personas</center>
          </td>
          <td>
            <center><?php echo $resul[4]; ?> personas</center>
          </td>
          <td>
            <center><?php echo $resul[5]; ?> personas</center>
          </td>
        </tr>
      </tbody>
        <caption>Numero de personas con televisión/pantalla</caption>
    </table>
  </div>
  <!-- ------ Datos que se van a capturar en js ----- -->
  <input type="hidden" id="cero" value="<?php echo $resul[0]; ?>">
  <input type="hidden" id="uno" value="<?php echo $resul[1]; ?>">
  <input type="hidden" id="dos" value="<?php echo $resul[2]; ?>">
  <input type="hidden" id="tres" value="<?php echo $resul[3]; ?>">
  <input type="hidden" id="cuatro" value="<?php echo $resul[4]; ?>">
  <input type="hidden" id="cinco" value="<?php echo $resul[5]; ?>">
  <!-- ------ Grafica de barras ----- -->
  <div class="card" id="barras" style="margin: 20px 20px; display: none;">
    <div class="card-header">
      <center>
        <h3>Gráfica de barras</h3>
      </center>
    </div>
    <div class="card-body">
      <canvas id="densityChart" width="600" height="200"></canvas>
    </div>
    <div class="card">
      <div class="card-body">
         Representacion del numero de personas con televisión/pantalla en su hogar.
      </div>
    </div>
  </div>
  <!-- ------ Grafica lineal ----- -->
  <div class="card" id="lineal" style="margin: 20px 20px; display: none;">
    <div class="card-header">
      <center>
        <h3>Gráfica lineal</h3>
      </center>
    </div>
    <div class="card-body">
      <canvas id="speedChart" width="600" height="200"></canvas>
    </div>
    <div class="card">
      <div class="card-body">
         Representacion del numero de personas con televisión/pantalla en su hogar.
      </div>
    </div>
  </div>
  <!-- ------ Grafica de pastel ----- -->
  <div class="card" id="pastel" style="margin: 20px 20px; display: none;">
    <div class="card-header">
      <center>
        <h3>Gráfica de pastel</h3>
      </center>
    </div>
    <div class="card-body">
      <canvas id="oilChart" width="600" height="200"></canvas>
    </div>
    <div class="card">
      <div class="card-body">
         Representacion del numero de personas con televisión/pantalla en su hogar.
      </div>
    </div>
  </div>
  <script type="text/javascript" src="script.js"></script>
</body> 
</html>
