@extends('layouts.app')

@section('template_title')
    Empleados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleados') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre</th>
									<th >Apellidos</th>
									<th >Fnacimiento</th>
									<th >Sexo</th>
									<th >Cargo</th>
									<th >Falta</th>
									<th >Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $empleado->nombre }}</td>
										<td >{{ $empleado->apellidos }}</td>
										<td >{{ $empleado->fNacimiento }}</td>
										<td >{{ $empleado->sexo }}</td>
										<td >{{ $empleado->cargo }}</td>
										<td >{{ $empleado->fAlta }}</td>
										<td >{{ $empleado->telefono }}</td>

                                            <td>
                                                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empleados.show', $empleado->id) }}"><i class="bi bi-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleados.edit', $empleado->id) }}"><i class="bi bi-pencil-square"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Estas seguro de borrar los datos?') ? this.closest('form').submit() : false;"><i class="bi bi-trash-fill"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empleados->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
