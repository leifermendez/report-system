@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">View > Report > {{$report->project->title}} >
                        {{Carbon\Carbon::parse($report->date_begin)->format('d/M/Y')}} -
                        {{Carbon\Carbon::parse($report->date_finish)->format('d/M/Y')}}
                    </div>

                    <div class="card-body">
                        <form class="" method="POST" action="{{ url('features/'.$report->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="p-4 line-height-report">
                                <h6><strong>{{$report->project->title}}</strong></h6>
                                @foreach($report->issues as $r)
                                    <ul>
                                        <li><strong>{{$r->title}} ({{$r->hours}} horas)</strong></li>
                                        @if($r->issue_features)
                                            <ul>
                                                @foreach($r->issue_features as $f)
                                                    <li>{{$f->detail->name}} <span class="font-italic text-muted">({{$f->hours}} horas)</span></li>
                                                @endforeach
                                            </ul>
                                        @endif

                                    </ul>
                                @endforeach
                            </div>

                            {{--                            <div class="position-relative form-group">--}}
                            {{--                                <label for="nameFeatures" class="">Nombre</label>--}}
                            {{--                                <input name="name" id="nameFeatures"--}}
                            {{--                                       placeholder=""--}}
                            {{--                                       value="{{ $data->name ?: '' }}"--}}
                            {{--                                       type="text"--}}
                            {{--                                       class="form-control">--}}
                            {{--                            </div>--}}
                            {{--                            <div class="position-relative form-group">--}}
                            {{--                                <label for="descriptionFeatures" class="">Descripcion</label>--}}
                            {{--                                <textarea name="description" id="descriptionFeatures"--}}
                            {{--                                          placeholder=""--}}
                            {{--                                          class="form-control">--}}
                            {{--                                    {{ $data->description ?: '' }}--}}
                            {{--                                </textarea>--}}
                            {{--                            </div>--}}
                            <button class="mt-1 btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
