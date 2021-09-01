<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutosController extends Controller
{
    
    private $dados = [];
   
    public function index()
    {
       $produtos = Produto::where('ativo', 1)
                ->orderBy('id')
                ->get();
       $this->dados['produtos'] = $produtos;
        return view ('produtos.index', $this->dados);
    }

   
    public function create()
    {
        return view ('produtos.create', $this->dados);
    }

    public function store(Request $request)
    {
        $produto = Produto::create([
                    "nome" => $request->nome,
                    "descricao" => $request->descricao,
                    "preco_venda" => $request->preco,
                    "preco_custo" => $request->custo,
                    "marca" => $request->marca,
                    "grupo" => $request->categoria,
                    "subgrupo" => $request->subcategoria,
                    "quantidade" => $request->quantidade,
                    "quantidade_minima" => $request->quantidade_minima,
                    "unidade" => $request->unidade,
                    "fornecedor" => $request->fornecedor,
                    "observacao" => $request->observacao
                   
        ]);
        if ($produto) {
            return redirect('produtos/cadastrar')
                            ->with('success', 'Cadastro realizado com sucesso');
        }
        return redirect('produtos/cadastrar')
                        ->with('error', 'Ocorreu um erro ao cadastrar o produto');
    }

    
    public function show($id)
    {
        return view ('produtos.show', $this->dados);
    }

    
    public function edit($id)
    {
       return view ('produtos.edit', $this->dados);
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
