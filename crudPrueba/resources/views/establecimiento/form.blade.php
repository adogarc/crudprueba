<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEstablecimiento') }}
            {{ Form::text('idEstablecimiento', $establecimiento->idEstablecimiento, ['class' => 'form-control' . ($errors->has('idEstablecimiento') ? ' is-invalid' : ''), 'placeholder' => 'Idestablecimiento']) }}
            {!! $errors->first('idEstablecimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreEstablecimiento') }}
            {{ Form::text('nombreEstablecimiento', $establecimiento->nombreEstablecimiento, ['class' => 'form-control' . ($errors->has('nombreEstablecimiento') ? ' is-invalid' : ''), 'placeholder' => 'Nombreestablecimiento']) }}
            {!! $errors->first('nombreEstablecimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $establecimiento->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>