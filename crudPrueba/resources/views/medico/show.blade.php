@extends('layouts.app')

@section('template_title')
    {{ $medico->name ?? 'Show Medico' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Medico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medicos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idmedico:</strong>
                            {{ $medico->idMedico }}
                        </div>
                        <div class="form-group">
                            <strong>Idestablecimiento:</strong>
                            {{ $medico->idEstablecimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombremedico:</strong>
                            {{ $medico->nombreMedico }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
