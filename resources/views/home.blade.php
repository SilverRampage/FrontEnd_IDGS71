@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">Inicio</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <p class="mb-0">Estadisticas</p>
                </div>
                
            


                <div class="graphics" style="display: flex;justify-content: space-between;padding: 20px; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1">

                <div class=''>
                    <canvas id="myChart" class="container-fluid" style="width: 600px"></canvas>
                </div>

               

                  <div class="controls" style="width: 200px; margin-right: 10px">

                    <div class="data-1" style="background-color: white;
                    display: flex;
                    flex-direction: column;
                    padding: 20px;
                    margin-bottom: 15px;
                    border-radius: 5px;
                    justify-content: center;
                    align-items: center;
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">

                      <div class="title" style="display: flex;align-items: center;">
                        <img src="{{ asset('images/temperature-png.svg') }}" alt="" width="45px" style="margin-right: 10px">
                        <label for="">Temperatura</label>
                      </div>

                      <div class="valor">
                        <span id='info' ></span>
                      </div>

                    </div>

                    
                  </div>

                 

                  

                
                </div>

                <div class="graphics" style="display: flex;justify-content: space-between;padding: 20px; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1)">

                <div class='col-md-7' style='box-shadow: 0px 0px 30px #00000'>
                    <canvas id="myChart2" style="width: 600px"></canvas>
                  </div>
                  
                  <div class="controls" style="width: 200px; margin-right: 10px">
                      <div class="data-1" style="background-color: white;
                        display: flex;
                        flex-direction: column;
                        padding: 20px;
                        margin-top: 10px;
                        border-radius: 5px;
                        justify-content: center;
                        align-items: center;
                        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">

                          <div class="title" style="display: flex;align-items: center;">
                            <img src="{{ asset('images/humidity-png.svg') }}" alt="" width="45px" style="margin-right: 10px">
                            <label for="">Humedad</label>
                          </div>

                          <div class="valor">
                            <span id='info2' ></span>
                          </div>
                      </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    
    

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');
  const ctx2 = document.getElementById('myChart2');
  const info = document.getElementById('info');
  const info2 = document.getElementById('info2');

 
  

  let etiquetas = [];
  let dataTemperatura = [];

  const temperatura = {
    label: "Temperatura",
    data: dataTemperatura,
    backgroundColor: 'rgb(238, 195, 115, 0.5)',// Color de fondo
    borderColor: 'rgb(135, 100, 69, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
  };

  const chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: etiquetas,
        datasets: [
            temperatura,
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
  });

  setInterval(() => {
    const now = new Date();
    const time = `${now.getHours()}:${now.getMinutes()}:${now.getSeconds()}`;
    const value = Math.floor(Math.random() * (22 - 19 + 1)) + 19;

    etiquetas.push(time);
    dataTemperatura.push(value);

    info.textContent = `${value}°C`;

    chart.update();
  }, 3000);



  let etiquetas2 = [];
  let dataTemperatura2 = [];


  const temperatura2 = {
    label: "Humedad",
    data: dataTemperatura2,
    backgroundColor: 'rgb(0, 0, 255, 0.5)',// Color de fondo
    borderColor: 'rgb(0, 0, 255, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
  };

  const chart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: etiquetas2,
        datasets: [
            temperatura2,
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
  });

  setInterval(() => {
    const now = new Date();
    const time = `${now.getHours()}:${now.getMinutes()}:${now.getSeconds()}`;
    const value = Math.floor(Math.random() * (50 - 19 + 1)) + 19;

    etiquetas2.push(time);
    dataTemperatura2.push(value);
    info2.textContent = `${value}%`;

    chart2.update();
  }, 5000);
</script>

@stop

