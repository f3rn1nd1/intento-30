@extends('layouts.app')

@section('template_title')
    Educacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Educacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('educaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Titulo</th>
										<th>Tipo Estudio</th>
										<th>Universidad</th>
										<th>Fecha Obtencion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($educaciones as $educacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $educacione->user_rut }}</td>
											<td>{{ $educacione->titulo }}</td>
											<td>{{ $educacione->tipo_estudio }}</td>
											<td>{{ $educacione->universidad }}</td>
											<td>{{ $educacione->fecha_obtencion }}</td>

                                            <td>
                                                <form action="{{ route('educaciones.destroy',$educacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('educaciones.show',$educacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('educaciones.edit',$educacione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $educaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
