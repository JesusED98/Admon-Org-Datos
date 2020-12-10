// ------------ Obtener los valores del json ---------
var cero = parseInt(document.getElementById("cero").value);
var uno = parseInt(document.getElementById("uno").value);
var dos = parseInt(document.getElementById("dos").value);
var tres = parseInt(document.getElementById("tres").value);
var cuatro = parseInt(document.getElementById("cuatro").value);
var cinco = parseInt(document.getElementById("cinco").value);

var personasTotales = cero+uno+dos+tres+cuatro+cinco;

// ------------ Obtener los elementos de html ---------

var barras = document.getElementById('barras');
var lienal = document.getElementById('lineal');
var pastel = document.getElementById('pastel');

// ------------ Control de visualizacion de las graficas ---------

// ------------ Boton grafica de barras ---------

function DysplayBarras() {
    if (barras.style.display == "none") {
        barras.style.display = "block";
        lienal.style.display = "none";
        pastel.style.display = "none";

        // ------------ Trazar grafica barras ---------
        var densityCanvas = document.getElementById("densityChart");
        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;
        var densityData = {
            label: String(personasTotales)+' personas',
            data: [cero, uno, dos, tres, cuatro, cinco], backgroundColor: [
                "#6384FF",
                "#6384FF",
                "#6384FF",
                "#6384FF",
                "#6384FF",
                "#6384FF"
            ]
        };
        var barChart = new Chart(densityCanvas, {
            type: 'bar',
            data: {
                labels: ["0 Televisores", "1 Televisor", "2 Televisores", "3 Televisores", "4 Televisores", "5 Televisores"],
                datasets: [densityData]
            }
        });

    } 
}

// ------------ Boton grafica lineal ---------

function DysplayLineal() {
    if (lienal.style.display == "none") {
        lienal.style.display = "block";
        barras.style.display = "none";
        pastel.style.display = "none";

        // ------------ Trazar grafica lineal ---------
        var speedCanvas = document.getElementById("speedChart");
        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;
        var dataFirst = {
            label: String(personasTotales)+' personas',
            data: [cero, uno, dos, tres, cuatro, cinco],
            lineTension: 0,
            fill: false,
            borderColor: 'blue'
        };
        var speedData = {
            labels: ["0 Televisores", "1 Televisores", "2 Televisores", "3 Televisores", "4 Televisores", "5 Televisores"],
            datasets: [dataFirst]
        };
        var chartOptions = {
            legend: {
                display: true,
                position: 'top',
                labels: {
                    boxWidth: 80,
                    fontColor: 'black'
                }
            }
        };
        var lineChart = new Chart(speedCanvas, {
            type: 'line',
            data: speedData,
            options: chartOptions
        });
    } 
}

// ------------ Boton grafica de pastel ---------

function DysplayPastel() {
    if (pastel.style.display == "none") {
        pastel.style.display = "block";
        barras.style.display = "none";
        lienal.style.display = "none";

        // ------------ Trazar grafica de pastel ---------
        var oilCanvas = document.getElementById("oilChart");
        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;
        var oilData = {
            labels: [
                String(cero) + " personas con 0 televisores",
                String(uno) + " personas con 1 televisor",
                String(dos) + " personas con 2 televisores",
                String(tres) + " personas con 3 televisores",
                String(cuatro) + " personas con 4 televisores",
                String(cinco) + " personas con 5 televisores",
            ],
            datasets: [
                {
                    data: [cero, uno, dos, tres, cuatro, cinco],
                    backgroundColor: [
                        "#FF1717",
                        "#FFB917",
                        "#17FF64",
                        "#1748FF",
                        "#6384FF",
                        "#341136"
                    ]
                }]
        };
        var pieChart = new Chart(oilCanvas, {
            type: 'pie',
            data: oilData
        });

    } 
}
