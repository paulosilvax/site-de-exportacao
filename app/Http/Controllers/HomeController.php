<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Rendeniza a página de contato
     * 
     * @return View
    */
    public function home()
    {
        return view('app.home');
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
}
