<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Exception;
use Illuminate\Http\Request;
//use resources\views\contato;

class ContatoController extends Controller
{
    /**
     * Rendeniza a página de contato
     * 
     * @return View
    */
    public function contato()
    {
        return view('app.contato');
    }

    /**
     * 
    */
    public function enviarFormulario(Request $request)
    {
        try {
            Contato::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'mensagem' => $request->mensagem,
                'assunto' => $request->assunto,
                'telefone' => $request->telefone,
            ]);
    
            return back()->withSucess('Formulário enviado');

        } catch (Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }
}
