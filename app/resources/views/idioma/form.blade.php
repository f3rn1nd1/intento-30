<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idioma') }}
            {{ Form::text('idioma', $idioma->idioma, ['class' => 'form-control' . ($errors->has('idioma') ? ' is-invalid' : ''), 'placeholder' => 'Idioma']) }}
            {!! $errors->first('idioma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel_escrito') }}
            {{ Form::text('nivel_escrito', $idioma->nivel_escrito, ['class' => 'form-control' . ($errors->has('nivel_escrito') ? ' is-invalid' : ''), 'placeholder' => 'Nivel Escrito']) }}
            {!! $errors->first('nivel_escrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel_oral') }}
            {{ Form::text('nivel_oral', $idioma->nivel_oral, ['class' => 'form-control' . ($errors->has('nivel_oral') ? ' is-invalid' : ''), 'placeholder' => 'Nivel Oral']) }}
            {!! $errors->first('nivel_oral', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_rut') }}
            {{ Form::text('user_rut', $idioma->user_rut, ['class' => 'form-control' . ($errors->has('user_rut') ? ' is-invalid' : ''), 'placeholder' => 'User Rut']) }}
            {!! $errors->first('user_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>