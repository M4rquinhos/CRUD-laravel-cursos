<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;




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

Route::get('/', HomeController::class)->name('home');

// Grupo de rutas para el controlador de cursos
// Route::controller(CursoController::class)->group(function() {
//     Route::get('cursos', 'index')->name('cursos.index');

//     Route::get('cursos/create', 'create')->name('cursos.create');

//     Route::post('cursos', 'store')->name('cursos.store');

//     Route::get('cursos/{curso}', 'show')->name('cursos.show');

//     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');

//     Route::put('cursos/{curso}', 'update')->name('cursos.update');

//     Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
// });

// Rutas para el controlador de cursos con resource
Route::resource('cursos', CursoController::class);

// Ruta para acerca de (no tiene controlador ya que solo accede auna vista estatica)
Route::view('about-us', 'about')->name('about');

// Rutas para el controlador de contacto
Route::get('contact-us', [ContactController::class, 'index'])->name('contact.index');

Route::post('contact-us', [ContactController::class, 'store'])->name('contact.store');



