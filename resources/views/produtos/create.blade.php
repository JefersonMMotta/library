@extends('templates.dash')

@section('content')
<a class="btn btn-secondary float-right btn-sm m-2" href="{{url('produtos')}}">Voltar</a>
<h6>Novo Produto</h6>
<form method="post" action="{{url('produtos/store')}}" class="row g-3">
    @csrf
    <div class="col-md-4">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
     <div class="col-md-8">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao" name="descricao">
    </div>
    <div class="col-md-4">
        <label for="preco" class="form-label">Preço</label>
        <input type="text" class="form-control" name="preco" id="preco">
    </div>
    
    <div class="col-md-4">
        <label for="custo" class="form-label">Custo</label>
        <input type="text" class="form-control" name="custo" id="custo">
    </div>
     <div class="col-4">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" name="marca" id="marca">
    </div>
    <div class="col-6">
        <label for="categoria" class="form-label">Categoria</label>
        <input type="text" class="form-control" name="categoria" id="categoria">
    </div>
    
    <div class="col-6">
        <label for="subcategoria" class="form-label">Subcategoria</label>
        <input type="text" class="form-control" name="subcategoria" id="subcategoria">
    </div>
    
    <div class="col-3">
        <label for="quantidade" class="form-label">quantidade</label>
        <input type="text" class="form-control" name="quantidade" id="quantidade">
    </div> 
    
     <div class="col-3">
        <label for="quantidade_minima" class="form-label">Estoque Minímo</label>
        <input type="text" class="form-control" name="quantidade_minima" id="quantidade_minima">
    </div>
    
    <div class="col-3">
        <label for="unidade" class="form-label">Unidade</label>
        <input type="text" class="form-control" name="unidade" id="unidade">
    </div>
    
    <div class="col-3">
        <label for="fornecedor" class="form-label">Fornecedor</label>
        <input type="text" class="form-control" name="fornecedor" id="fornecedor">

    </div>   
    <div class="col-12">
        <label for="observacao" class="form-label">Observação</label>
        <input type="text" class="form-control" name="observacao" id="observacao">
    </div>   
   
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary btn-sm mt-2">Cadastrar</button>
    </div>
</form>
@endsection