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
                        <div class="p-4 line-height-report">

                            @foreach($data as $k => $v)
                                <h6><strong>{{$v['title']}} ({{$v['hours_all']}}) horas</strong></h6>
                                <ul>
                                    @foreach($v['list'] as $i)
                                        @if($i['hours'])
                                            <li>{{$i['title']}} ({{$i['hours']}} horas)</li>
                                        @endif

                                    @endforeach
                                </ul>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
