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
                        <th style="width: 5%">
                            #
                        </th>
                        <th style="width: 20%">
                            Nome
                        </th>
                        <th style="width: 35%">
                            Descrição
                        </th>
                        <th style="width: 15%">
                            Progresso
                        </th>
                        <th style="width: 10%">
                            Status
                        </th>
                        <th style="width: 15%">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            123
                        </td>
                        <td>
                            <a>
                                Tarefas de casa
                            </a>
                            <br>
                            <small>
                                criação 01.01.2019
                            </small>
                        </td>
                        <td>
                            organizar a estrutura da tasks, fazer os cruds, organizar o controller
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
                            <span class="badge badge-success">Ativo</span>
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
                </tbody>
            </table>
        </div>
    </div>
@stop
