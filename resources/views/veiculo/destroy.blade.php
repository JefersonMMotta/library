@extends('templates.dash')

@section('content')
<a class="btn btn-secondary float-right btn-sm" href="{{url('veiculos')}}">Voltar</a>
<h6>Excluir Véiculo</h6>
<form method="post" action="{{url('veiculos/delete/'.$veiculo->id)}}" class="row g-3">
    @csrf
    <div class="col-md-4">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" readonly="readonly"class="form-control" name="marca" id="marca" value="{{$veiculo->marca}}">
    </div>
     <div class="col-md-2">
        <label for="modelo" class="form-label">Modelo</label>
        <input type="text" readonly=""class="form-control" name="modelo" id="modelo" name="modelo" value="{{$veiculo->modelo}}">
    </div>
    <div class="col-md-3">
        <label for="cor" class="form-label">COR</label>
        <input type="text" readonly=""class="form-control" name="cor" id="cor" value="{{$veiculo->cor}}">
    </div>
    
    <div class="col-md-3">
        <label for="placa" class="form-label">PLACA</label>
        <input type="text" readonly=""class="form-control" name="placa" id="placa" value="{{$veiculo->placa}}">
    </div>
     <div class="col-2">
        <label for="ano" class="form-label">ANO</label>
        <input type="text" readonly=""class="form-control" name="ano" id="ano" value="{{$veiculo->ano}}">
    </div>
  
    <div class="col-12">
        <button type="submit" class="btn btn-danger btn-sm mt-2">Excluir</button>
    </div>
</form>
@endsection