<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empresas_id') }}
            {{ Form::text('empresas_id', $postulante->empresas_id, ['class' => 'form-control' . ($errors->has('empresas_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresas Id']) }}
            {!! $errors->first('empresas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_rut') }}
            {{ Form::text('user_rut', $postulante->user_rut, ['class' => 'form-control' . ($errors->has('user_rut') ? ' is-invalid' : ''), 'placeholder' => 'User Rut']) }}
            {!! $errors->first('user_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>