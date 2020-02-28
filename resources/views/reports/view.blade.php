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
                        <input id="date-range0" value="" placeholder="Rango de fechas"
                               class="form-control form-date-input">
                    </div>
                    <div class="card-body">
                        @foreach($data as $d)
                            <div class="card mb-3 opacity-full"
                                 style="{{!$d->is_range ? 'opacity:.3':'aa'}}">
                                <div class="card-header d-flex justify-content-between">
                                    <div data-toggle="tooltip"
                                         data-original-title="{{$d->project->organization->name}}">
                                        {{Carbon\Carbon::parse($d->date_begin)->format('d M Y')}} /
                                        {{Carbon\Carbon::parse($d->date_finish)->format('d M Y')}} <i
                                            class="fas fa-angle-right"></i>
                                        {{$d->project->title}}
                                        <span class="font-italic">({{$d->hours_all}})</span>
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
                                        <form method="POST" action="/reports/{{$d->id}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn-sm btn">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                        <a href="/issues/create?report={{$d->id}}"
                                           class="btn btn-sm text-success"
                                           data-toggle="tooltip" title=""
                                           data-original-title="Issues">
                                            <i class="fas fa-plus-square"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="card-body">
                                    @if(count($d->issues))
                                        <blockquote class="blockquote mb-0 report-text-block">
                                            <ul class="m-0 p-0">
                                                @foreach($d->issues as $i)
                                                    <li data-toggle="tooltip"
                                                        data-original-title="Tag: {{$i->get_tag->name}} - {{$i->hours}} horas"
                                                        class="badge badge-light-gray mb-1">
                                                        <canvas class="pointer-color"
                                                                style="background-color: {{$i->get_tag->color}}"></canvas>
                                                        {{$i->title}}</li>
                                                @endforeach

                                            </ul>
                                        </blockquote>
                                    @else
                                        <div class="text-center p-3">
                                            <a href="/issues/create?report={{$d->id}}"
                                               class="btn btn-sm"
                                               data-toggle="tooltip" title=""
                                               data-original-title="Issues">
                                                <div>
                                                    <i class="fas fa-folder-open fa-3x"></i>
                                                </div>
                                                <div class="p-1">

                                                    <i>Sin contenido</i>
                                                </div>
                                            </a>

                                        </div>

                                    @endif
                                </div>
                            </div>
                            <div class="col-12">


                            </div>

                        @endforeach
                        <div class="card p-2 pl-3 pr-3">
                            <strong>Total: {{$general['hours']}} <span class="text-muted">(horas)</span></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
