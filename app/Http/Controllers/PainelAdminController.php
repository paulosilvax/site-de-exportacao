<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PainelAdminController extends Controller
{
    /**
     * Rendeniza a página de contato
     * 
     * @return View
    */
    public function painel()
    {
        return view('admin.painel');
    }
}
