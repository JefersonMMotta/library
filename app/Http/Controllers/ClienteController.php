<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cliente;

class ClienteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $dados = [];

    public function index()
    {
        $clientes = Cliente::where('ativo', 1)
                ->orderBy('id')
                ->get();
        
        $this->dados['clientes'] = $clientes;
        return view('clientes.index', $this->dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('clientes.create', $this->dados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Cliente::where('cpf', $request->cpf)->exists()) {
            return redirect('clientes/cadastrar')
                            ->with('error', 'O numero de CPF ja esta cadastrado');
        }

        $cliente = Cliente::create([
                    "nome" => $request->nome,
                    "cpf" => $request->cpf,
                    "rg" => $request->rg,
                    "data_nascimento" => $request->data_nascimento,
                    "logradouro" => $request->logradouro,
                    "numero" => $request->numero,
                    "bairro" => $request->bairro,
                    "cidade" => $request->cidade,
                    "uf" => $request->uf,
                    "cep" => $request->cep,
                    "complemento" => $request->complemento,
                    "telefone" => $request->telefone,
                    "email" => $request->email,
        ]);
        if ($cliente) {
            return redirect('clientes/cadastrar')
                            ->with('success', 'Cadastro realizado com sucesso');
        }
        return redirect('clientes/cadastrar')
                        ->with('error', 'Ocorreu um erro ao cadastrar o cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findorfail($id);
        $veiculos = $cliente->veiculos()->get();
        $this->dados['cliente'] = $cliente;
        $this->dados['veiculos'] = $veiculos;
        return view('clientes.show', $this->dados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findorfail($id);
        $this->dados['cliente'] = $cliente;
        return view('clientes.edit', $this->dados);
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
        $cliente = Cliente::findorfail($id);
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->rg = $request->rg;
        $cliente->data_nascimento = $request->data_nascimento;
        $cliente->logradouro = $request->logradouro;
        $cliente->numero = $request->numero;
        $cliente->bairro = $request->bairro;
        $cliente->cidade = $request->cidade;
        $cliente->uf = $request->uf;
        $cliente->cep = $request->cep;
        $cliente->complemento = $request->complemento;
        $cliente->telefone = $request->telefone;
        $cliente->email = $request->email;
        if ($cliente->save()) {
            return redirect('clientes/editar/' . $cliente->id)
                            ->with('success', 'Cliente editado com sucesso!');
        }

        return redirect('clientes/cadastrar')
                        ->with('error', 'Ocorreu um erro ao cadastrar o cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findorfail($id);
        $this->dados['cliente'] = $cliente;
        return view('clientes.destroy', $this->dados);
    }

    public function delete($id, Request $request)
    {
        $cliente = Cliente::findorfail($id);
        $cliente->ativo = 0;
        $cliente->save();
        return redirect('clientes')
                        ->with('success', 'Cliente excluído com sucesso!');
    }

}
