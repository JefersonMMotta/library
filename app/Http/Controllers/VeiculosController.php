<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Veiculo;
use App\Models\Cliente;

class VeiculosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $dados = [];

    public function index()
    {
        $veiculo = Veiculo::where('ativo', '1')
                ->orderBy('id')
                ->get();
        $this->dados['veiculos'] = $veiculo;
        return view('veiculo.index', $this->dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cliente = Cliente::findorfail($id);
        $this->dados['cliente'] = $cliente;
        return view('veiculo.create', $this->dados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        
        $cliente = Cliente::findorfail($id);
        $veiculo = $cliente->veiculos()->create([
                    "marca" => $request->marca,
                    "modelo" => $request->modelo,
                    "cor" => $request->cor,
                    "placa"=> $request->placa,
                    "ano" => $request->ano,
                    "kilometragem"=> $request->kilometragem
                    
                    
        ]);
        if ($veiculo) {
            return redirect('veiculos/cadastrar/'.$cliente->id)
                            ->with('success', 'Cadastro realizado com sucesso');
        }
        return redirect('veiculo/cadastrar/'.$cliente->id)
                        ->with('error', 'Ocorreu um erro ao cadastrar o veiculo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veiculo= Veiculo::findorfail($id);
        $this->dados['veiculo'] = $veiculo;
        return view('veiculo.show', $this->dados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo= Veiculo::findorfail($id);
        $this->dados['veiculo'] = $veiculo;
        return view('veiculo.edit', $this->dados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $veiculo= Veiculo::findorfail($id);
        
        if ($veiculo>save()) {
            return redirect('veiculo/editar/' . $veiculo>id)
                            ->with('success', 'veiculoeditado com sucesso!');
        }

        return redirect('veiculo/cadastrar')
                        ->with('error', 'Ocorreu um erro ao cadastrar o veiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo= Veiculo::findorfail($id);
        $this->dados['veiculo'] = $veiculo;
        return view('veiculo.destroy', $this->dados);
    }

    public function delete($id, Request $request)
    {
        $veiculo= Veiculo::findorfail($id);
        $veiculo->ativo = 0;
        $veiculo->save();
        return redirect('veiculos')
                        ->with('success', 'Veículo excluído com sucesso!');
    }

}
