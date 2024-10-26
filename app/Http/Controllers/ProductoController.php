<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    // Productos vidrios
    public function productVidrios()
    {
        return view('vidrios.productVidrios');
    }

    public function bano()
    {
        return view('productos.bano');
    }

    public function puertas()
    {
        return view('productos.puertas');
    }

    public function ventanas()
    {
        return view('productos.ventanas');
    }

    public function repisas()
    {
        return view('productos.repisas');
    }

    public function otros()
    {
        return view('productos.otros_servicios');
    }

    // Productos Aceros
    public function puertasA()
    {
        return view('aceros.puertasA');
    }

    public function banosA()
    {
        return view('productos.banosA');
    }

    public function pasamanosA()
    {
        return view('productos.pasamanosA');
    }

    public function ventanasA()
    {
        return view('productos.ventanasA');
    }

    public function repisasA()
    {
        return view('productos.repisasA');
    }

    public function mesasA()
    {
        return view('productos.otrosA');
    }

    public function otrosA()
    {
        return view('productos.otrosA');
    }

    // Productos Servicios
    public function Matenimientos()
    {
        return view('productos.Matenimientos');
    }

    public function instalacion()
    {
        return view('productos.instalacion');
    }

    public function diseno()
    {
        return view('productos.diseno');
    }

    public function asesorias()
    {
        return view('productos.asesorias');
    }

    // CRUD de productos
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'precio' => 'required|numeric',
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'precio' => 'required|numeric',
        ]);

        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }

    // Funciones para habilitar y deshabilitar productos
    public function habilitar(Producto $producto)
    {
        $producto->update(['estado' => 'habilitado']);
        return redirect()->route('productos.index')->with('success', 'Producto habilitado exitosamente.');
    }

    public function deshabilitar(Producto $producto)
    {
        $producto->update(['estado' => 'deshabilitado']);
        return redirect()->route('productos.index')->with('success', 'Producto deshabilitado exitosamente.');
    }
}