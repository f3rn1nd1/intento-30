@extends('layouts.app')

@section('template_title')
    Idioma
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Idioma') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('idiomas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idioma</th>
										<th>Nivel Escrito</th>
										<th>Nivel Oral</th>
										<th>User Rut</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($idiomas as $idioma)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $idioma->idioma }}</td>
											<td>{{ $idioma->nivel_escrito }}</td>
											<td>{{ $idioma->nivel_oral }}</td>
											<td>{{ $idioma->user_rut }}</td>

                                            <td>
                                                <form action="{{ route('idiomas.destroy',$idioma->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('idiomas.show',$idioma->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('idiomas.edit',$idioma->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $idiomas->links() !!}
            </div>
        </div>
    </div>
@endsection
