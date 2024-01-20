@extends('adminlte::page')
@section('title') Dashboard @endsection
@section('content_header') 
    <div class="row">
        <div class="col-sm-4">
            <a class="small-box bg-green p-3" href="" style="text-decoration: none; color: inherit;">
                <div class="inner">
                    <h4>Concluídas</h4>
                    <h4><i class="fas fa-arrow-right mr-3"></i><strong>{{$tasks_completed}}</strong></h4>
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
            </a>
        </div>
        

        <div class="col-sm-4">
            <a class="small-box bg-info p-3" href="" style="text-decoration: none; color: inherit;">
                <div class="inner">
                    <h4>Pendentes</h4>
                    <h4><i class="fas fa-arrow-right mr-3"></i><strong>{{$pending_tasks}}</strong></h4>
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-4">
            <a class="small-box bg-danger p-3" href="" style="text-decoration: none; color: inherit;">
                <div class="inner">
                    <h4>Não concluídas</h4>
                    <h4><i class="fas fa-arrow-right mr-3"></i><strong>{{$not_completed}}</strong></h4>
                    <div class="icon">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
            <h1 class="card-title">
                <i class="fas fa-chart-pie mr-2 text-primary"></i>
                Histórico do mês
            </h1>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 270px;">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class="">
                            </div> 
                        </div>
                    </div>
                    <canvas id="revenue-chart-canvas" height="270" width="700" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection  

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var data = {
                labels: ['Todas tarefas', 'Concluídas', 'Não concluídas', 'Pendentes'],
                datasets: [{
                    label: 'Tarefas / mês',
                    backgroundColor: 'rgb(0, 123, 255)',
                    data: [25, 10, 15, 2]
                }]
            };

            // Configurações do gráfico
            var options = {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            };

            // Inicialização do gráfico
            $(function () {
                var ctx = document.getElementById('revenue-chart-canvas').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });
            });
    </script>
@stop