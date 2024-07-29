@extends('layouts.app')

@section('template_title')
    {{ $consola->name ?? __('Mostrar') . " " . __('Consola') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Consola</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('consolas.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Almacenamiento:</strong>
                                    {{ $consola->almacenamiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Disponibilidad:</strong>
                                    {{ $consola->disponibilidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Modelo:</strong>
                                    {{ $consola->modelo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Marca:</strong>
                                    {{ $consola->marca }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
