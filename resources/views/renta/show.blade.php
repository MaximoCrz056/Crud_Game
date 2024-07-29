@extends('layouts.app')

@section('template_title')
    {{ $renta->name ?? __('Mostrar') . " " . __('Renta') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Renta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('rentas.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Tiempo:</strong>
                                    {{ $renta->tiempo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pagototal:</strong>
                                    {{ $renta->pagoTotal }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Horainicio:</strong>
                                    {{ $renta->horaInicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Horatermino:</strong>
                                    {{ $renta->horaTermino }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
