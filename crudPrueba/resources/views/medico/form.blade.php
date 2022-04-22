<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idMedico') }}
            {{ Form::text('idMedico', $medico->idMedico, ['class' => 'form-control' . ($errors->has('idMedico') ? ' is-invalid' : ''), 'placeholder' => 'Idmedico']) }}
            {!! $errors->first('idMedico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstablecimiento') }}
            {{ Form::select('idEstablecimiento',$establecimiento, $medico->idEstablecimiento, ['class' => 'form-control' . ($errors->has('idEstablecimiento') ? ' is-invalid' : ''), 'placeholder' => 'Idestablecimiento']) }}
            {!! $errors->first('idEstablecimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('nombreMedico') }}
            {{ Form::text('nombreMedico', $medico->nombreMedico, ['class' => 'form-control' . ($errors->has('nombreMedico') ? ' is-invalid' : ''), 'placeholder' => 'Nombremedico']) }}
            {!! $errors->first('nombreMedico', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>