<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<body>
<br>
<section>
    <div  class="container-fluid">
    <p><h4 style="bg-success" class="text-primary">Dashboard</h4></p>
    </div>
    </section>
    <hr style="   border-width: 3px; dorder:solid;" class="bg-danger">
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <input type="button" id="btnBuscar" value="Actualizar">
          </div>
        </div>
          <div class="row">
                <div class="col-md-4">
                        
                        <canvas id="myChart" width="200" height="200"></canvas>
<script>

  var paraEstados = ['anzotegui','aragua','apure','amazonas'];
  var paraCantidad = [];
 $('#btnBuscar').click(function(){
    $.post("<?php echo ?>",
        function (data){
            var estados=paraEstados;
            var contador=[60, 19, 3, 5, 2,35,50];
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:estados, 
                    datasets: [{
                        label: 'Proyecto Ingenio',
                        data:contador,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });
 });



</script>
                 </div>
          </div>
      </div>
</body>