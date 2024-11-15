<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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
#ruta para mostar todos los registros
route::get('producto',[productoController::class,'index'])->name('producto.index');

#ruta para crear
route::get('producto/create',[productoController::class,'create'])->name('producto.create');
route::post('producto/store',[productoController::class,'store'])->name('producto.store');

#ruta para editar
route::get('producto/edit/{id}',[productoController::class,'edit'])->name('producto.edit');
route::post('producto/update/{id}',[productoController::class,'update'])->name('producto.update');

#ruta para eliminar
route::delete('producto/delete/{id}',[productoController::class,'delete'])->name('producto.delete');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
