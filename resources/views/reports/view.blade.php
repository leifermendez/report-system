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
                                   class="btn-primary mr-3 btn over-block-card" data-original-title="Example Tooltip">
                                    Nuevo
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pl-4 pr-4 pb-2 pt-2">
                        <input id="date-range0"  value="" class="form-control">
                    </div>
                    <div class="card-body">
                        @foreach($data as $d)
                            <div class="card mb-3">
                                <div class="card-header d-flex justify-content-between">
                                    <div data-toggle="tooltip"
                                         data-original-title="{{$d->project->organization->name}}">
                                        {{Carbon\Carbon::parse($d->date_begin)->format('d M Y')}} /
                                        {{Carbon\Carbon::parse($d->date_finish)->format('d M Y')}} <i
                                            class="fas fa-angle-right"></i>
                                        {{$d->project->title}}
                                        <span class="font-italic">({{array_sum(array_column($d->issues->toArray(), 'hours'))}})</span>
                                    </div>
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
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0 report-text-block">
                                        <ul class="m-0 p-0">
                                            @foreach($d->issues as $i)
                                                <li data-toggle="tooltip"
                                                    data-original-title="{{$i->hours}} horas"
                                                    class="badge badge-light-gray mb-1">{{$i->title}}</li>
                                            @endforeach

                                        </ul>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-12">


                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
