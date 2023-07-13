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
// Route::get('/dashboard', [LivroController::class, 'read'])->name('dashboard');
// Route::get('/academicos', [LivroController::class, 'read'])->name('academicos');
// Route::get('/romances', function () {
//     return view('romances');
// })->name('romances');
// Route::get('/suspense-drama', function () {
//     return view('suspense-drama');
// })->name('suspense-drama');
// Route::get('/infantis', function () {
//     return view('infantis');
// })->name('infantis');
// Route::get('/app', function () {
//     return view('app');
// })->name('app');
Route::get('/termos-condicoes', function () {
    return view('termos-condicoes');
})->name('termos-condicoes');

// Route::get('/resultado-buscas', function () {
//     return view('resultado-buscas');
// })->name('resultado-buscas');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');   
    Route::post('/criar', [LivroController::class, 'criar'])->name('criar');
    
});

