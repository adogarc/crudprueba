@extends('layouts.app')

@section('template_title')
    {{ $establecimiento->name ?? 'Show Establecimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Establecimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('establecimientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>IdEstablecimiento:</strong>
                            {{ $establecimiento->idEstablecimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreestablecimiento:</strong>
                            {{ $establecimiento->nombreEstablecimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $establecimiento->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
