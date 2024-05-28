<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Exception;

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

        return view('admin.produtos.create', ['categorias'=>$categorias]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Produto::create([
                'nome' => $request->name,
                'descricao' => $request->subject, //descricao
                'categoria_id'=>$request->categoria,
            ]);
    
            return back()->withSucess('Formulário enviado');

        } catch (Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('admin.produtos.show', $produto);
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
        //
    }
}
