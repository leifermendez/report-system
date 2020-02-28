@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="app-page-title m-0">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fas fa-tags"></i>
                                </div>
                                <div>Etiquetas
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <a href="/tags/create" type="button" data-toggle="tooltip" title=""
                                   data-placement="bottom"
                                   class="btn-primary mr-3 btn " data-original-title="Example Tooltip">
                                    Nuevo
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="mb-0 table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Color</th>
                                <th>Proyecto</th>
                                <th>Inicio</th>
                                <th>Finalización</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                                <tr class="{{($d->is_range === 'current') ?
                                    'row-danger-border':
                                       (($d->is_range === 'next_week') ? 'row-warning-border': '')
                                    }}">
                                    <th scope="row">{{$d->id}}</th>
                                    <td>{{$d->name}}</td>
                                    <td>
                                        <span class="badge badge-info"
                                              style="background-color: {{$d->color}}">{{$d->color}}</span>
                                    </td>
                                    <td>{{($d->projects) ? $d->projects->title : 'N/A'}}</td>
                                    <td>{{$d->start_at}}</td>
                                    <td>{{$d->deadline_at}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/tags/{{$d->id}}/edit" class="btn btn-sm"
                                               data-toggle="tooltip" title=""
                                               data-original-title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form method="POST" action="/tags/{{$d->id}}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn-sm btn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
