<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
 /**
     * Rendeniza a página de contato
     * 
     * @return View
    */
    public function produto()
    {
        return view('app.produto');
    }
}
