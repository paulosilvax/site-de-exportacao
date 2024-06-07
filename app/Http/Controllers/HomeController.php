<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $produtos = Produto::all();
        $nome = User::all();

        return view('app.home', ['produtos' => $produtos], ['name' => $nome]);
    }

    /**
     * Rendeniza a página de contato
     * 
     * @return View
     */
    public function produto()
    {
        return view('app.produto');
    }

    public function biografia()
    {
        return view('app.biografia');
    }
    public function compra()
    {
        $produtos = Produto::all();
        $nome = User::all();

        return view('app.compra', ['produtos' => $produtos, 'name' => $nome]);
    }
}
