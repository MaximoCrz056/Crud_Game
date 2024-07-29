@extends('layouts.app')

@section('template_title')
    Rentas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Rentas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rentas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Tiempo</th>
									<th >Pagototal</th>
									<th >Horainicio</th>
									<th >Horatermino</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rentas as $renta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $renta->tiempo }}</td>
										<td >{{ $renta->pagoTotal }}</td>
										<td >{{ $renta->horaInicio }}</td>
										<td >{{ $renta->horaTermino }}</td>

                                            <td>
                                                <form action="{{ route('rentas.destroy', $renta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rentas.show', $renta->id) }}"><i class="bi bi-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rentas.edit', $renta->id) }}"><i class="bi bi-pencil-square"></i></a>
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
                {!! $rentas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
