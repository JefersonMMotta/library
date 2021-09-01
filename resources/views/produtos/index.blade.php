@extends('templates.dash')

@section('content')
<a class="btn btn-primary float-right btn-sm m-2" href="{{url('produtos/cadastrar')}}">Cadastrar</a>
<h6>Produtos</h6>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-sm">
        <thead>
        <th></th>
        <th>NOME</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Custo</th>
        <th>Marca</th>
        <th>Categoria</th>
        <th>Subcategoria</th>
        <th>Quantidade</th>
        <th>Estoque Mínimo</th>
        <th>Unidade</th>
        <th>Fornecedor</th>
        <th>Observação</th>
        </thead>

        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                           Ações
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url('clientes/detalhes/'.$produto->id)}}">Detalhes</a></li>
                            <li><a class="dropdown-item" href="{{url('clientes/editar/'.$produto->id)}}">Editar</a></li>
                            <li><a class="dropdown-item" href="{{url('clientes/excluir/'.$produto->id)}}">Excluir</a></li>
                        </ul>
                    </div>
                </td>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->preco_custo}}</td>
                <td>{{$produto->marca}}</td>
                <td>{{$produto->categoria}}</td>
                <td>{{$produto->subcategoria}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>{{$produto->quantidade_minima}}</td>
                <td>{{$produto->unidade}}</td>
                <td>{{$produto->fornecedor}}</td>
                <td>{{$produto->observacao}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection