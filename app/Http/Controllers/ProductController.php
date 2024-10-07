<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products         = Product::orderBy('created_at', 'desc')->get();
        return view('pages.products.index')
                ->with('products', $products);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retorna apenas a minha view
        return view('pages.products.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aqui é que a mágica acontece!!😎😎

        $request->validate([
            'nome_produto'          => 'required',
            'marca'                 => 'required',
            'categoria'             => 'required',
            'valor_compra'          => 'required|numeric',
            'valor_venda'           => 'required|numeric',
            'qtd_estoque'           => 'required|integer',
        ]);
        // Conecta com a Model e leva as informações para o Banco de Dados
        Product::create($request->all());
        // Por fim, retorna e ou redireciona para a rota (GET) que eu quiser!!
        return redirect()->route('products.index')->with('message', 'Produto Criado com Sucesso👌👌😎');


    }

    /**
     * Display the specified resource.
     */
    public function show(Request $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Product::find($id);
        return view('pages.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Aqui os dados são inseridos no banco, após serem editados
        $product = Product::find($id);
        $request->validate([
            'nome_produto'          => 'required',
            'marca'                 => 'required',
            'categoria'             => 'required',
            'valor_compra'          => 'required|numeric',
            'valor_venda'           => 'required|numeric',
            'qtd_estoque'           => 'required|integer',
        ]);
        // Conecta com a Model e leva as informações para o Banco de Dados
        $product->update($request->all());
        // Por fim, retorna e ou redireciona para a rota (GET) que eu quiser!!
        return redirect()->route('products.index')->with('message', 'Produto Editado com Sucesso ✅');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('message', 'Produto Deletado da base de dados! ❌🚫');
    }
}
