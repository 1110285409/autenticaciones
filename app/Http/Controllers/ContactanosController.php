<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }
    public function ayudas()
    {
        return view('contactanos.ayudas');
    }
    public function formularios()
    {
        return view('contactanos.formularios');
    }
    public function quienes()
    {
        return view('contactanos.quienes');
    }
}
