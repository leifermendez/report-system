@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Nuevo > Etiqueta</div>

                    <div class="card-body">
                        <form class="" method="POST" action="{{ url('tags/'.$data->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="position-relative form-group">
                                <label for="nameTags" class="">Nombre</label>
                                <input name="name" id="nameTags"
                                       placeholder=""
                                       value="{{ $data->name ?: '' }}"
                                       type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="colorTags" class="">Color</label>
                                <input name="color" id="colorTags"
                                       placeholder=""
                                       type="text"
                                       value="{{ $data->color ?: '' }}"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="projectTags" class="">Proyectos</label>
                                <select name="projects_id" id="projectTags" class="form-control">
                                    @foreach($projects as $project)
                                        <option
                                            {{(($data->projects) && ($data->projects->id === $project->id)) ? 'selected' : ''}}
                                            value="{{$project->id}}">{{$project->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {!! $data->trix('content') !!}
                            <div class="position-relative form-group">
                                <label for="startAtTags" class="">Inicio</label>
                                <input name="start_at" id="startAtTags"
                                       placeholder=""
                                       type="date"
                                       value="{{ $data->start_at ? Carbon\Carbon::parse($data->start_at)->format('Y-m-d'): '' }}"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="deadLineAtTags" class="">Final</label>
                                <input name="deadline_at" id="deadLineAtTags"
                                       placeholder=""
                                       type="date"
                                       value="{{ $data->deadline_at ? Carbon\Carbon::parse($data->deadline_at)->format('Y-m-d'): '' }}"
                                       class="form-control">
                            </div>
                            <button class="mt-1 btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        function setValue(text = '') {
            const trixEditor = document.querySelector("trix-editor")
            trixEditor.editor.insertHTML(text);
        }

        document.addEventListener("DOMContentLoaded", function (event) {
            setValue(`{!! $data->content !!}`)
        });

    </script>

@endsection
