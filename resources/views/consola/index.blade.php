@extends('layouts.app')

@section('template_title')
    Consolas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consolas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consolas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Almacenamiento</th>
									<th >Disponibilidad</th>
									<th >Modelo</th>
									<th >Marca</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consolas as $consola)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $consola->almacenamiento }}</td>
										<td >{{ $consola->disponibilidad }}</td>
										<td >{{ $consola->modelo }}</td>
										<td >{{ $consola->marca }}</td>

                                            <td>
                                                <form action="{{ route('consolas.destroy', $consola->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consolas.show', $consola->id) }}"><i class="bi bi-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consolas.edit', $consola->id) }}"><i class="bi bi-pencil-square"></i></a>
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
                {!! $consolas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
