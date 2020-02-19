@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Nuevo > Report</div>

                    <div class="card-body">
                        <form class="" method="POST" action="{{ url('reports') }}">
                            {{ csrf_field() }}
                            <div class="position-relative form-group">
                                <label for="dateBeginReports" class="">Desde</label>
                                <input name="date_begin" id="dateBeginReports"
                                       placeholder=""
                                       type="date"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="dateFinishReports" class="">Hasta</label>
                                <input name="date_finish" id="dateFinishReports"
                                       placeholder=""
                                       type="date"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="reportsProject" class="">Proyectos</label>
                                <select name="project_with_organization" id="reportsProject" class="form-control">
                                    @foreach($projects as $project)
                                        <option value="{{$project->organization->id}}_{{$project->id}}">[{{$project->organization->name}}
                                            ] {{$project->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="mt-1 btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
