@extends('templates.dash')

@section('content')
<a class="btn btn-primary float-right btn-sm" href="{{url('veiculos/cadastrar')}}">Cadastrar</a>
<h6>Veículos</h6>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-sm">
        <thead>
        <th></th>
        <th>MARCA</th>
        <th>MODELO</th>
        <th>COR</th>
        <th>PLACA</th>
        <th>ANO</th>       
        </thead>

        <tbody>
            @foreach($veiculos as $veiculo)
            <tr>
                <td>
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                           Ações
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url('veiculos/detalhes/'.$veiculo->id)}}">Detalhes</a></li>
                            <li><a class="dropdown-item" href="{{url('veiculos/editar/'.$veiculo->id)}}">Editar</a></li>
                            <li><a class="dropdown-item" href="{{url('veiculos/excluir/'.$veiculo->id)}}">Excluir</a></li>
                        </ul>
                    </div>
                </td>
                <td>{{$veiculo->marca}}</td>
                <td>{{$veiculo->modelof}}</td>
                <td>{{$veiculo->cor}}</td>
                <td>{{$veiculo->placa}}</td>
                <td>{{$veiculo->ano}}</td>               
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection