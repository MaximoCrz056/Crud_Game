@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? __('Mostrar') . " " . __('Empleado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('empleados.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $empleado->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidos:</strong>
                                    {{ $empleado->apellidos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fnacimiento:</strong>
                                    {{ $empleado->fNacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sexo:</strong>
                                    {{ $empleado->sexo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cargo:</strong>
                                    {{ $empleado->cargo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Falta:</strong>
                                    {{ $empleado->fAlta }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $empleado->telefono }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
