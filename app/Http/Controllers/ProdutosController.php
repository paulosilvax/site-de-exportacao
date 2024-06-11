<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Str;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('admin.produtos.index', ['produtos' => $produtos]);
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('admin.produtos.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {            
            $imgName = Str::random(5) .'.'. $request->file('file')->getClientOriginalExtension();

            Produto::create([
                'nome' => $request->name,
                'descricao' => $request->descricao,
                'categoria_id' => (int)$request->categoria,
                'preco' => $request->preco,
                'img_url' => $imgName
            ]);

            $request->file('file')->storeAs('public/produtos', $imgName);

            return redirect()->route('produtos.index');

        } catch (Exception $exception) {
            dd($exception);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        $categorias = Categoria::all();

        return view('app.compra', ['produto' => $produto, 'categoria' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        
        return redirect()->route('produtos.index');
    }
}
