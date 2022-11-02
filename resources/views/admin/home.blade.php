@extends('layouts.auth')

@section('content')
    <section class="container">
        <h1 class="h2">Totalizadores</h1>
        <div class="row">
            <div class="col">
                <div class="card border-primary m-3" style="max-width: 18rem;">
                    <div class="card-header">Prestadores de serviço</div>
                    <div class="card-body text-primary">
                        <p class="card-text text-center h4">{{ $totalizers->providers }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-info m-3" style="max-width: 18rem;">
                    <div class="card-header">Clientes</div>
                    <div class="card-body text-info">
                        <p class="card-text text-center h4">{{ $totalizers->clients }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-success  m-3" style="max-width: 18rem;">
                    <div class="card-header">Parcerias</div>
                    <div class="card-body text-success">
                        <p class="card-text text-center h4">0 <small class="h6">(Não implementado)</small></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-secondary m-3" style="max-width: 18rem;">
                    <div class="card-header">Administradores</div>
                    <div class="card-body text-secondary">
                        <p class="card-text text-center h4">{{ $totalizers->admins }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
