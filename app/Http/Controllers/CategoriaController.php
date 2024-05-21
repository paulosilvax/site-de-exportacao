<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();

        return view('admin.categorias.index', ['categorias' => $categorias]);
    }

    public function create()
    {
        return view('admin.categorias.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Categoria::create([
                'nome' => $request->name,
                'descricao' => $request->subject, //descricao
            ]);
    
            return back()->withSucess('Formulário enviado');

        } catch (Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('app.categorias', $categoria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
