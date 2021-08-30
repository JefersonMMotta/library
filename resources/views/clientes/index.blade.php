@extends('templates.dash')

@section('content')
<a class="btn btn-primary float-right btn-sm" href="{{url('clientes/cadastrar')}}">Cadastrar</a>
<h6>Clientes</h6>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-sm">
        <thead>
        <th></th>
        <th>NOME</th>
        <th>CPF</th>
        <th>RG</th>
        <th>DATA NASCIMENTO</th>
        <th>LOGRADOURO</th>
        <th>NÚMERO</th>
        <th>COMPLEMENTO</th>
        <th>BAIRRO</th>
        <th>CIDADE</th>
        <th>UF</th>
        <th>CEP</th>
        <th>TELEFONE</th>
        <th>EMAIL</th>
        </thead>

        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                           Ações
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url('clientes/detalhes/'.$cliente->id)}}">Detalhes</a></li>
                            <li><a class="dropdown-item" href="{{url('clientes/editar/'.$cliente->id)}}">Editar</a></li>
                            <li><a class="dropdown-item" href="{{url('clientes/excluir/'.$cliente->id)}}">Excluir</a></li>
                        </ul>
                    </div>
                </td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->cpf}}</td>
                <td>{{$cliente->rg}}</td>
                <td>{{$cliente->data_nascimento}}</td>
                <td>{{$cliente->logradouro}}</td>
                <td>{{$cliente->numero}}</td>
                <td>{{$cliente->complemento}}</td>
                <td>{{$cliente->bairro}}</td>
                <td>{{$cliente->cidade}}</td>
                <td>{{$cliente->uf}}</td>
                <td>{{$cliente->cep}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>{{$cliente->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection