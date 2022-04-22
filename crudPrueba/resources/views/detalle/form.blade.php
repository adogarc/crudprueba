<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idDetalle') }}
            {{ Form::text('idDetalle', $detalle->idDetalle, ['class' => 'form-control' . ($errors->has('idDetalle') ? ' is-invalid' : ''), 'placeholder' => 'Iddetalle']) }}
            {!! $errors->first('idDetalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idReceta') }}
            {{ Form::text('idReceta', $detalle->idReceta, ['class' => 'form-control' . ($errors->has('idReceta') ? ' is-invalid' : ''), 'placeholder' => 'Idreceta']) }}
            {!! $errors->first('idReceta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMedicamento') }}
            {{ Form::text('idMedicamento', $detalle->idMedicamento, ['class' => 'form-control' . ($errors->has('idMedicamento') ? ' is-invalid' : ''), 'placeholder' => 'Idmedicamento']) }}
            {!! $errors->first('idMedicamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detalle->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>