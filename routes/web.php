<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/categorias', function () {
    return view('categorias');
});

Route::get('/categorias/vidrios', function () {
    return view('vidrios');
});

Route::get('/categorias/aceros', function () {
    return view('aceros');
});

Route::get('/categorias/servicios', function () {
    return view('servicios');
});

Route::get('/ofertas', function () {
    return view('ofertas');
});

Route::get('/contactanos', function () {
    return view('contactanos');
});

Route::get('/contactanos/ayuda', function () {
    return view('ayuda');
});

Route::get('/contactanos/pqrs', function () {
    return view('pqrs');
});

Route::get('/contactanos/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/terminos', function () {
    return view('terminos');
});

Route::get('/politicas', function () {
    return view('politicas');
});

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/vidrios', [CategoriaController::class, 'vidrios']);
Route::get('/categorias/aceros', [CategoriaController::class, 'aceros']);
Route::get('/categorias/servicios', [CategoriaController::class, 'servicios']);

// routes/web.php de vidrios

Route::get('/productos/vidrios', function () {
    return view('productos.productvidrios');
});

Route::get('/productos/banos', function () {
    return view('productos.banos');
});

Route::get('/productos/puertas', function () {
    return view('productos.puertas');
});

Route::get('/productos/ventanas', function () {
    return view('productos.ventanas');
});

Route::get('/productos/repisas', function () {
    return view('productos.repisas');
});

Route::get('/productos/otros', function () {
    return view('productos.otros');
});

// routes/web.php de Aceros

Route::get('/productos/puertasA', function () {
    return view('productos.puertasA');
});

Route::get('/productos/banosA', function () {
    return view('productos.banosA');
});

Route::get('/productos/pasamanosA', function () {
    return view('productos.pasamanosA');
});

Route::get('/productos/ventanasA', function () {
    return view('productos.ventanasA');
});

Route::get('/productos/repisasA', function () {
    return view('productos.repisasA');
});

Route::get('/productos/mesasA', function () {
    return view('productos.mesasA');
});

Route::get('/productos/otrosA', function () {
    return view('productos.otrosA');
});

// routes/web.php de Servicios

Route::get('/productos/mantenimientos', function () {
    return view('productos.mantenimientos');
});

Route::get('/productos/instalacion', function () {
    return view('productos.instalacion');
});

Route::get('/productos/diseno', function () {
    return view('productos.diseno');
});

Route::get('/productos/asesorias', function () {
    return view('productos.asesorias');
});

// routes/web.php de Contactanos

Route::get('/contactanos/ayudas', function () {
    return view('contactanos.ayudas');
});

Route::get('/contactanos/formularios', function () {
    return view('contactanos.formularios');
});

Route::get('/contactanos/quienes', function () {
    return view('contactanos.quienes');
});

// Rutas para habilitar y deshabilitar productos
Route::patch('productos/{producto}/habilitar', [ProductoController::class, 'habilitar'])->name('productos.habilitar');
Route::patch('productos/{producto}/deshabilitar', [ProductoController::class, 'deshabilitar'])->name('productos.deshabilitar');

// Rutas CRUD para productos
Route::resource('productos', ProductoController::class);

// Rutas para el Dashboard

Route::get('/dashboard/pedidos', [DashboardController::class, 'pedidos'])->name('pedidos.index');
Route::get('/dashboard/productos', [DashboardController::class, 'productos'])->name('productos.index');
Route::get('/dashboard/usuarios', [DashboardController::class, 'usuarios'])->name('usuarios.index');
Route::get('/dashboard/reportes', [DashboardController::class, 'reportes'])->name('reportes.index');
Route::get('/dashboard/integraciones', [DashboardController::class, 'integraciones'])->name('integraciones.index');
Route::get('/dashboard/bodegas', [DashboardController::class, 'bodegas'])->name('bodegas.index');
Route::get('/dashboard/inventarios', [DashboardController::class, 'inventarios'])->name('inventarios.index');
Route::get('/dashboard/stock', [DashboardController::class, 'stock'])->name('stock.index');
require __DIR__.'/auth.php';
