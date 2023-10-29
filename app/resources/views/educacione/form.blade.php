<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_rut') }}
            {{ Form::text('user_rut', $educacione->user_rut, ['class' => 'form-control' . ($errors->has('user_rut') ? ' is-invalid' : ''), 'placeholder' => 'User Rut']) }}
            {!! $errors->first('user_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $educacione->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_estudio') }}
            {{ Form::text('tipo_estudio', $educacione->tipo_estudio, ['class' => 'form-control' . ($errors->has('tipo_estudio') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Estudio']) }}
            {!! $errors->first('tipo_estudio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('universidad') }}
            {{ Form::text('universidad', $educacione->universidad, ['class' => 'form-control' . ($errors->has('universidad') ? ' is-invalid' : ''), 'placeholder' => 'Universidad']) }}
            {!! $errors->first('universidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_obtencion') }}
            {{ Form::text('fecha_obtencion', $educacione->fecha_obtencion, ['class' => 'form-control' . ($errors->has('fecha_obtencion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Obtencion']) }}
            {!! $errors->first('fecha_obtencion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>