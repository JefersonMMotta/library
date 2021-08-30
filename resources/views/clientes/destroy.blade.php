@extends('templates.dash')

@section('content')
<a class="btn btn-secondary float-right btn-sm" href="{{url('clientes')}}">Voltar</a>
<h6>Excluir Cliente</h6>
<form method="post" action="{{url('clientes/delete/'.$cliente->id)}}" class="row g-3">
    @csrf
    <div class="col-md-4">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" readonly="readonly"class="form-control" name="nome" id="nome" value="{{$cliente->nome}}">
    </div>
     <div class="col-md-2">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="text" readonly=""class="form-control" name="data_nascimento" id="data_nascimento" name="data_nascimento" value="{{$cliente->data_nascimento}}">
    </div>
    <div class="col-md-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" readonly=""class="form-control" name="cpf" id="cpf" value="{{$cliente->cpf}}">
    </div>
    
    <div class="col-md-3">
        <label for="rg" class="form-label">RG</label>
        <input type="text" readonly=""class="form-control" name="rg" id="rg" value="{{$cliente->rg}}">
    </div>
     <div class="col-2">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" readonly=""class="form-control" name="cep" id="cep" value="{{$cliente->cep}}">
    </div>
    <div class="col-4">
        <label for="logradouro" class="form-label">Endereço</label>
        <input type="text" readonly=""class="form-control" name="logradouro" id="logradouro" value="{{$cliente->logradouro}}">
    </div>
    
    <div class="col-2">
        <label for="numero" class="form-label">Numero</label>
        <input type="text" readonly=""class="form-control" name="numero" id="numero" value="{{$cliente->numero}}">
    </div>
    
    <div class="col-4">
        <label for="complemento" class="form-label">Complemento</label>
        <input type="text" readonly=""class="form-control" name="complemento" id="complemento" value="{{$cliente->complemento}}">
    </div> 
    
     <div class="col-6">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" readonly=""class="form-control" name="bairro" id="bairro" value="{{$cliente->bairro}}">
    </div>
    
    <div class="col-4">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" readonly=""class="form-control" name="cidade" id="cidade" value="{{$cliente->cidade}}">
    </div>
    
    <div class="col-2">
        <label for="uf" class="form-label">UF</label>
        <input type="text" readonly=""class="form-control" name="uf" id="uf" value="{{$cliente->uf}}">   

    </div>   
    <div class="col-8">
        <label for="email" class="form-label">E-mail</label>
        <input type="text" readonly=""class="form-control" name="email" id="email" value="{{$cliente->email}}">
    </div>   
    <div class="col-4">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" readonly=""class="form-control" name="telefone" id="telefone" value="{{$cliente->telefone}}">
    </div>   
    <div class="col-12">
        <button type="submit" class="btn btn-danger btn-sm mt-2">Excluir</button>
    </div>
</form>
@endsection