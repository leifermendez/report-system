@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Nuevo > ISSUE > {{$report->project->title}}</div>

                    <div class="card-body">
                        <form class="" method="POST" action="{{ url('issues') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="projects_id" value="{{$report->project->id}}">
                            <div class="position-relative form-group">
                                <label for="titleProjects" class="">Titulo</label>
                                <input name="title" id="titleProjects"
                                       placeholder=""
                                       type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <table class="mb-0 table">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    @foreach($features as $feature)
                                        <tr>
                                            <td width="70%">
                                                <input type="checkbox" id="check_{{$feature->id}}" name="features[{{$feature->id}}]"
                                                       value="{{$feature->id}}" {{($feature->default_value) ? 'checked':''}}>
                                                <label for="check_{{$feature->id}}">{{$feature->name}}</label>
                                            </td>
                                            <td>
                                                <input name="hours_list[{{$feature->id}}]" id="nameFeatures"
                                                       placeholder=""
                                                       type="number"
                                                       class="form-control">
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="position-relative form-group">
                                <label for="developerIssues" class="">Developer</label>
                                <select name="users_id" id="developerIssues" class="form-control">
                                    @foreach($developers as $developer)
                                        <option value="{{$developer->id}}">{{$developer->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="position-relative form-group">
                                <label for="observationsIssues" class="">Descripcion</label>
                                <textarea name="observations" id="observationsIssues"
                                       placeholder=""
                                       class="form-control">
                                </textarea>
                            </div>
                            <button class="mt-1 btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
