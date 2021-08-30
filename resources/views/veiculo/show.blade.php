@extends('templates.dash')

@section('content')
<a class="btn btn-primary float-right btn-sm" href="{{url('clientes')}}">Voltar</a>
<h6>Dados</h6>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-sm">
        <tbody>
               <tr>
                <td>marca:</td>
                <td>{{$veiculo->marca}}</td>
            </tr>
            <tr>
                <td>modelo:</td>
                <td>{{$veiculo->modelo}}</td>
            </tr>
            <tr>
                <td>cor:</td>
                <td>{{$veiculo->cor}}</td>
            </tr>
            <tr>
                <td>Placa:</td>
                <td>{{$veiculo->placa}}</td>

            </tr>
            <tr>
                <td>Ano:</td>
                <td>
                    {{$veiculo->ano}}
                   
                </td>
            </tr>
            <tr>
        </tbody>
    </table>

</div>
@endsection