@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit > Project</div>

                    <div class="card-body">
                        <form class="" method="POST" action="{{ url('features/'.$data->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="position-relative form-group">
                                <label for="nameFeatures" class="">Nombre</label>
                                <input name="name" id="nameFeatures"
                                       placeholder=""
                                       value="{{ $data->name ?: '' }}"
                                       type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="descriptionFeatures" class="">Descripcion</label>
                                <textarea name="description" id="descriptionFeatures"
                                          placeholder=""
                                          class="form-control">
                                    {{ $data->description ?: '' }}
                                </textarea>
                            </div>
                            <div class="position-relative form-group">
                                <label for="default_valueFeatures" class="">Pre seleccionado</label>
                                <select name="default_value" id="default_valueFeatures" class="form-control">
                                    <option
                                        {{ ($data->default_value == 1) ? 'selected': '' }} value="1">
                                        Si
                                    </option>
                                    <option
                                        {{ ($data->default_value == 0) ? 'selected': '' }}  value="0">
                                        No
                                    </option>
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
