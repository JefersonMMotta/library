@extends('templates.dash')

@section('content')
<a class="btn btn-secondary float-right btn-sm" href="{{url('veiculos')}}">Voltar</a>
<h6>Novo Veículo </h6>
<form method="post" action="{{url('veiculos/store/'.$cliente->id)}}" class="row g-3">
    @csrf
    <div class="col-md-4">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" name="marca" id="marca">
    </div>
     <div class="col-md-4">
        <label for="modelo" class="form-label">Modelo</label>
        <input type="text" class="form-control" name="modelo" id="modelo" name="modelo">
    </div>
    <div class="col-md-2">
        <label for="cor" class="form-label">Cor</label>
        <input type="text" class="form-control" name="cor" id="cor">
    </div>
    
    <div class="col-md-2">
        <label for="ano" class="form-label">Ano</label>
        <input type="text" class="form-control" name="ano" id="ano">
    </div>
    
    <div class="col-md-2">
        <label for="kilometragem" class="form-label">KM</label>
        <input type="text" class="form-control" name="kilometragem" id="kilometragem">
    </div>
    
    <div class="col-md-2">
        <label for="placa" class="form-label">Placa</label>
        <input type="text" class="form-control" name="placa" id="placa">
    </div>
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary btn-sm mt-2">Cadastrar</button>
    </div>
</form>
@endsection