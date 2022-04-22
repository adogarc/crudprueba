<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idMedicamento') }}
            {{ Form::text('idMedicamento', $medicamento->idMedicamento, ['class' => 'form-control' . ($errors->has('idMedicamento') ? ' is-invalid' : ''), 'placeholder' => 'Idmedicamento']) }}
            {!! $errors->first('idMedicamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreMedicamento') }}
            {{ Form::text('nombreMedicamento', $medicamento->nombreMedicamento, ['class' => 'form-control' . ($errors->has('nombreMedicamento') ? ' is-invalid' : ''), 'placeholder' => 'Nombremedicamento']) }}
            {!! $errors->first('nombreMedicamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $medicamento->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>