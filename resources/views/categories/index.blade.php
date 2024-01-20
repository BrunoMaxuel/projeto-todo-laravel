@extends('adminlte::page')

@section('content_header')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categorias</h3>
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
                        <th style="width: 15%;">
                            Progresso
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                {{$category->id}}
                            </td>
                            <td>
                                <a>
                                    <strong>{{$category->category_name}}</strong>
                                </a>
                                <br>
                                <small>
                                    {{$category->created_at}}
                                </small>
                            </td>
                            <td>
                                {{$category->category_description}}
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                    </div>
                                </div>
                                <small>
                                    57% concluído
                                </small>
                            </td>
                            <td class="project-state">
                                @if($category->asset_task)
                                    <span class="badge badge-success fas fa-check"> </span>
                                @else
                                    <input type="checkbox" name="asset_task" id="">
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
