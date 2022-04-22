@extends('layouts.app')

@section('template_title')
    {{ $detalle->name ?? 'Show Detalle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iddetalle:</strong>
                            {{ $detalle->idDetalle }}
                        </div>
                        <div class="form-group">
                            <strong>Idreceta:</strong>
                            {{ $detalle->idReceta }}
                        </div>
                        <div class="form-group">
                            <strong>Idmedicamento:</strong>
                            {{ $detalle->idMedicamento }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalle->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
