@extends('templates.dash')

@section('content')
<a class="btn btn-primary float-right btn-sm m-2" href="{{url('clientes')}}">Voltar</a>
<h6>Dados</h6>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-sm">
        <tbody>
               <tr>
                <td>Nome:</td>
                <td>{{$cliente->nome}}</td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td>{{$cliente->cpf}}</td>
            </tr>
            <tr>
                <td>RG:</td>
                <td>{{$cliente->rg}}</td>
            </tr>
            <tr>
                <td>Data Nascimento:</td>
                <td>{{$cliente->data_nascimento}}</td>

            </tr>
            <tr>
                <td>Endereço:</td>
                <td>
                    {{$cliente->logradouro}},
                    {{$cliente->numero}},
                    {{$cliente->complemento}},
                    {{$cliente->bairro}},
                    {{$cliente->cidade}} -
                    {{$cliente->uf}} -
                    {{$cliente->cep}}
                </td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td> 
                 {{$cliente->telefone}}
                </td>
               
            </tr>
            <tr>
                <td>E-mail:</td>
                <td>
                     {{$cliente->email}}
                </td>               
            </tr>         
        </tbody>
    </table>
</div>

<a class="btn btn-primary float-right btn-sm m-2" href="{{url('veiculos/cadastrar/'.$cliente->id)}}">Novo Veículo</a>
<h6>Veículos</h6>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>COR</th>
            <th>ANO</th>
            <th>PLACA</th>
        </thead>
        <tbody>
            @foreach($veiculos as $veiculo)
            <tr>
                <td>{{$veiculo->marca}}</td>
                <td>{{$veiculo->modelo}}</td>
                <td>{{$veiculo->cor}}</td>
                <td>{{$veiculo->ano}}</td>
                <td>{{$veiculo->placa}}</td>
            </tr>
            @endforeach()
        </tbody>
       
    </table>
</div>
@endsection