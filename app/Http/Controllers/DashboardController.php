<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function productVidrios()
    {
        return view('vidrios.productVidrios');
    }

    // Añadir este método para la vista de Pedidos
    public function pedidos()
    {
        return view('Dashboard.Pedidos.index');
    }

    public function productos()
    {
        return view('Dashboard.productos.index');
    }

    public function usuarios()
    {
        return view('Dashboard.usuarios.index');
    }

    public function reportes()
    {
        return view('Dashboard.reportes.index');
    }
    public function integraciones()
    {
        return view('Dashboard.integraciones.index');
    }

    public function bodegas()
    {
        return view('Dashboard.bodegas.index');
    }
        public function inventarios()
    {
        return view('Dashboard.inventarios.index');
    }

    public function stock()
    {
        return view('Dashboard.stock.index');
    }
}
