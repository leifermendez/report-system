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
                                    <i class="fas fa-file-word "></i>
                                </div>
                                <div>Reports
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <a href="/reports/create" type="button" data-toggle="tooltip" title=""
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
                                <th>Fecha</th>
                                <th>Proyecto</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                                <tr>
                                    <th scope="row">{{$d->id}}</th>
                                    <td> {{Carbon\Carbon::parse($d->date_begin)->format('d M Y')}} /
                                        {{Carbon\Carbon::parse($d->date_finish)->format('d M Y')}}</td>
                                    <td>[{{$d->project->organization->name}}] {{$d->project->title}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/reports/{{$d->id}}" class="btn btn-sm"
                                               data-toggle="tooltip" title=""
                                               data-original-title="Issues">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="/reports/{{$d->id}}/edit" class="btn btn-sm"
                                               data-toggle="tooltip" title=""
                                               data-original-title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="/issues/create?report={{$d->id}}" class="btn btn-sm"
                                               data-toggle="tooltip" title=""
                                               data-original-title="Issues">
                                                <i class="fas fa-list"></i>
                                            </a>
                                            <form method="POST" action="/reports/{{$d->id}}">
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
