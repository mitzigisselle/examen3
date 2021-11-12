<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonasControl;

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

Route::get('/', [PersonasControl::class, 'index'])->name('personas.index');

Route::get('personas/ingresar', [PersonasControl::class, 'ingresar'])->name('personas.ingresar');

Route::post('personas', [PersonasControl::class, 'store'])->name('personas.store');

Route::get('personas/{persona}/edit', [PersonasControl::class, 'edit'])->name('personas.edit');

Route::put('personas/{persona}', [PersonasControl::class, 'update'])->name('personas.update');

Route::delete('personas/{persona}', [PersonasControl::class, 'destroy'])->name('personas.destroy');