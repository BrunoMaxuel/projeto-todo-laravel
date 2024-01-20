@extends('adminlte::page')

@section('content_header')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tarefas</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th style="width: 5%;">
                            #
                        </th>
                        <th style="width: 30%;">
                            Nome
                        </th>
                        <th style="width: 30%;">
                            Descrição
                        </th>
                        <th style="width: 5%;">
                            Status
                        </th>
                        <th style="width: 15%; text-align:center;">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>
                                {{$task->id}}
                            </td>
                            <td>
                                <a>
                                    <strong>{{$task->task_name}}</strong>
                                </a>
                                <br>
                                <small>
                                    {{$task->created_at}}
                                </small>
                            </td>
                            <td>
                                {{$task->task_description}}
                            </td>
                            
                            <td class="project-state">
                                @if(!$task->asset_task)
                                    <span class="badge badge-success fas fa-check"> </span>
                                @else
                                <span class="badge badge-danger fas fa-times"> </span>
                                @endif
                                
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-eye">

                                </i>
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pen">

                                    </i>
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
