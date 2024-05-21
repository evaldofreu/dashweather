<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    
  <nav class="navbar navbar-expand-lg bg-body-tertiary border">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">DashWeather</a>
    </div>
    <div class="container">
        
    </div>    
  </nav>  
  
  <div class="container">
     <canvas id="grafico"></canvas>
  </div>  
       




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="dados/data_sjqm.js"></script>

    <script>
        var rotulos = [];
        var valores  = [];
        for(var reg=0;reg<data['dados'].length;reg++) {
          rotulos.push(data['dados'][reg]["data"]);
          valores.push(data['dados'][reg]["temperatura_maxima_C"]);
        }
          

        const grafico = document.getElementById("grafico");
        new Chart(grafico, {
                              type: 'line',
                              data: {
                                labels: rotulos,
                                datasets: [{
                                  label: 'Temperatura em São Joaquim da Barra',
                                  data: valores,
                                  borderWidth: 1,
                                  borderColor: '#C40C0C',
                                  backgroundColor: '#FFC100',
                                }]
                              },
                              options: {
                                scales: {
                                  y: {
                                    beginAtZero: true
                                  }
                                }
                              }
                            });

    </script>  

  </body>
</html>