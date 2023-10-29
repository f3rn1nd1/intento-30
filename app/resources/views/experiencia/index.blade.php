@extends('layouts.app')

@section('template_title')
    Experiencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Experiencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('experiencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>User Rut</th>
										<th>Razon Social</th>
										<th>Puesto</th>
										<th>F Inicio</th>
										<th>F Fin</th>
										<th>Nivel Experiencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($experiencias as $experiencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $experiencia->user_rut }}</td>
											<td>{{ $experiencia->razon_social }}</td>
											<td>{{ $experiencia->puesto }}</td>
											<td>{{ $experiencia->f_inicio }}</td>
											<td>{{ $experiencia->f_fin }}</td>
											<td>{{ $experiencia->nivel_experiencia }}</td>

                                            <td>
                                                <form action="{{ route('experiencias.destroy',$experiencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('experiencias.show',$experiencia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('experiencias.edit',$experiencia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $experiencias->links() !!}
            </div>
        </div>
    </div>
@endsection
