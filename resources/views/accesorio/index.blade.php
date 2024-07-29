@extends('layouts.app')

@section('template_title')
    Accesorios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Accesorios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('accesorios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Tipo</th>
									<th >Modelo</th>
									<th >Marca</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($accesorios as $accesorio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $accesorio->tipo }}</td>
										<td >{{ $accesorio->modelo }}</td>
										<td >{{ $accesorio->marca }}</td>

                                            <td>
                                                <form action="{{ route('accesorios.destroy', $accesorio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('accesorios.show', $accesorio->id) }}"><i class="bi bi-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('accesorios.edit', $accesorio->id) }}"><i class="bi bi-pencil-square"></i></a>
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
                {!! $accesorios->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
