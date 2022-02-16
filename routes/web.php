<?php
use App\Http\Controllers\cursosController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('cursos')->group(function(){
    Route::get('/', [cursosController::class, 'index'])->name('cursos-index');
    Route::get('/create', [cursosController::class, 'create'])->name('cursos-create');
    Route::post('/', [cursosController::class, 'store'])->name('cursos-store');
    Route::get('/{id}/edit', [cursosController::class, 'edit'])->where('id','[0-9]+') ->name('cursos-edit');
    Route::put('/{id}', [cursosController::class, 'update'])->where('id','[0-9]+') ->name('cursos-update');
    Route::delete('/{id}', [cursosController::class, 'destroy'])->where('id','[0-9]+') ->name('cursos-destroy');

});



Route::fallback(function(){
    return"Rota não encontrada";
});
