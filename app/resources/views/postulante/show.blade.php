@extends('layouts.app')

@section('template_title')
    {{ $postulante->name ?? "{{ __('Show') Postulante" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Postulante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('postulantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empresas Id:</strong>
                            {{ $postulante->empresas_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Rut:</strong>
                            {{ $postulante->user_rut }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
