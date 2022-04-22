<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idReceta') }}
            {{ Form::text('idReceta', $receta->idReceta, ['class' => 'form-control' . ($errors->has('idReceta') ? ' is-invalid' : ''), 'placeholder' => 'Idreceta']) }}
            {!! $errors->first('idReceta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMedico') }}
            {{ Form::text('idMedico', $receta->idMedico, ['class' => 'form-control' . ($errors->has('idMedico') ? ' is-invalid' : ''), 'placeholder' => 'Idmedico']) }}
            {!! $errors->first('idMedico', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>