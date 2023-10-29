@extends('layouts.app')

@section('template_title')
    {{ $educacione->name ?? "{{ __('Show') Educacione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Educacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('educaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Rut:</strong>
                            {{ $educacione->user_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $educacione->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Estudio:</strong>
                            {{ $educacione->tipo_estudio }}
                        </div>
                        <div class="form-group">
                            <strong>Universidad:</strong>
                            {{ $educacione->universidad }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Obtencion:</strong>
                            {{ $educacione->fecha_obtencion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
