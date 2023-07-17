<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivroController;

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

Route::get('/', [LivroController::class, 'read']);

// Route::get('/app', function () {
//     return view('app');
// })->name('app');
Route::get('/termos-condicoes', function () {
    return view('termos-condicoes');
})->name('termos-condicoes');

Route::get('/resultado-buscas', function () {
    return view('resultado-buscas');
})->name('resultado-buscas');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');   
    Route::post('/criar', [LivroController::class, 'criar'])->name('criar');
    
});

