<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function fnIndex()
    {
        return view('welcome');
    }

    public function fnGaleria($numero=0)
    {
        $valor = $numero;
        $otro = 25;
        //return view('pagGaleria', ['valor'=>15, 'otro' => 25]);
        return view('pagGaleria', compact('valor', 'otro'));
    }

    public function fnLista(){
        return view('pagLista');
    }
}
