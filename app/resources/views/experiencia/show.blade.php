@extends('layouts.app')

@section('template_title')
    {{ $experiencia->name ?? "{{ __('Show') Experiencia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Experiencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('experiencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Rut:</strong>
                            {{ $experiencia->user_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Razon Social:</strong>
                            {{ $experiencia->razon_social }}
                        </div>
                        <div class="form-group">
                            <strong>Puesto:</strong>
                            {{ $experiencia->puesto }}
                        </div>
                        <div class="form-group">
                            <strong>F Inicio:</strong>
                            {{ $experiencia->f_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>F Fin:</strong>
                            {{ $experiencia->f_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Experiencia:</strong>
                            {{ $experiencia->nivel_experiencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
