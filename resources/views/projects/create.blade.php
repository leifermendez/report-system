@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Nuevo > Project</div>

                    <div class="card-body">
                        <form class="" method="POST" action="{{ url('projects') }}">
                            {{ csrf_field() }}
                            <div class="position-relative form-group">
                                <label for="titleProjects" class="">Titulo</label>
                                <input name="title" id="titleProjects"
                                       placeholder=""
                                       type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="organizationsProjects" class="">Organizacion</label>
                                <select name="organizations_id" id="organizationsProjects" class="form-control">
                                    @foreach($organizations as $organization)
                                        <option value="{{$organization->id}}">{{$organization->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="position-relative form-group">
                                <label for="urlProjects" class="">Url</label>
                                <input name="url" id="urlProjects"
                                       placeholder=""
                                       type="url"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="descriptionProjects" class="">Descripcion</label>
                                <textarea name="description" id="descriptionProjects"
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
