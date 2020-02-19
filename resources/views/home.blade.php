@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div class="col-md-12 row m-0">
                            <div class="col-2 over-block-card card p-3 mr-2 text-center">
                                <a class="btn btn-default text-center" href="reports">
                                    <i class="fas fa-file-word fa-3x"></i>
                                    <div class="mt-2">Reportes</div>
                                </a>
                            </div>
                            <div class="col-2 over-block-card card p-3 mr-2 text-center">
                                <a class="btn btn-default" href="organizations">
                                    <i class="fas fa-industry fa-3x"></i>
                                    <div class="mt-2">Empresa</div>
                                </a>
                            </div>
                            <div class="col-2 over-block-card card p-3 mr-2 text-center">
                                <a class="btn btn-default" href="projects">
                                    <i class="fas fa-folder-open fa-3x"></i>
                                    <div class="mt-2">Proyecto</div>
                                </a>
                            </div>
                            <div class="col-2 over-block-card card p-3 mr-2 text-center">
                                <a class="btn btn-default" href="features">
                                    <i class="fas fa-list-ul fa-3x"></i>
                                    <div class="mt-2">Caracteristicas</div>
                                </a>
                            </div>
                            <div class="col-2 over-block-card card p-3 mr-2 text-center">
                                <a class="btn btn-default" href="chart">
                                    <i class="fas fa-list-ul fa-3x"></i>
                                    <div class="mt-2">Diagrama</div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
