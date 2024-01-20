@extends('adminlte::page')
@section('title') Dashboard @endsection
@section('content_header') 
    <div class="row">
        <div class="col-sm-4">
            <a class="small-box bg-green p-3" href="{{ route('historico.view') }}" style="text-decoration: none; color: inherit;">
                <div class="inner">
                    <h4>Concluídas</h4>
                    <h4><i class="fas fa-arrow-right mr-3"></i><strong>0</strong></h4>
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
            </a>
        </div>
        

        <div class="col-sm-4">
            <a class="small-box bg-info p-3" href="{{ route('produto.index') }}" style="text-decoration: none; color: inherit;">
                <div class="inner">
                    <h4>Pendentes</h4>
                    <h4><i class="fas fa-arrow-right mr-3"></i><strong>0</strong></h4>
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-4">
            <a class="small-box bg-danger p-3" href="{{ route('cliente.index') }}" style="text-decoration: none; color: inherit;">
                <div class="inner">
                    <h4>Não concluídas</h4>
                    <h4><i class="fas fa-arrow-right mr-3"></i><strong>10</strong></h4>
                    <div class="icon">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
                Vendas
            </h3>
            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content p-0">
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class="">
                            </div> 
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class="">
                            </div>
                        </div>
                    </div>
                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px; display: block; width: 584px;" width="584" class="chartjs-render-monitor">asd</canvas>
                </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="0" style="height: 0px; display: block; width: 0px;" class="chartjs-render-monitor" width="0">asd</canvas>
                </div>
            </div>
        </div>
    </div>
@endsection  

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var data = {
                labels: ['Vendas no crediário', 'Vendas à vista', 'Vendas em débito', 'Vendas em crédito '],
                datasets: [{
                    label: 'Histórico de vendas',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    data: [50, 120, 80, 30, 90, 12, 13, 123]
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