@extends('layouts.app')

@section('template_title')
    {{ $idioma->name ?? "{{ __('Show') Idioma" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Idioma</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('idiomas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idioma:</strong>
                            {{ $idioma->idioma }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Escrito:</strong>
                            {{ $idioma->nivel_escrito }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Oral:</strong>
                            {{ $idioma->nivel_oral }}
                        </div>
                        <div class="form-group">
                            <strong>User Rut:</strong>
                            {{ $idioma->user_rut }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
