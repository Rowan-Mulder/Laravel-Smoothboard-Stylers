<?php

use App\Models\Material;
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



//*/ Voor bezoekers
// Homepage
Route::view('/', 'web.sections.static.home');

// Materialen
Route::get('/Materialen', fn() => view('web.sections.material.index', ['materials' => Material::all()]));
Route::get('/Materialen/details/{material}', function (Material $material) {
    return view('web.sections.material.details', [
        'material' => $material
    ]);
});
Route::get('/Materialen/edit/{material}', function (Material $material) {
    return view('web.sections.material.edit', [
        'material' => $material
    ]);
});

// Authenticatie voor beheerders
require __DIR__ . '/auth.php';
Route::view('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');
//*/



Route::fallback(function() {
    abort(404);
});





//*/ Oefeningen en testjes
// [GET]   /welcome
Route::view('/welcome', 'web.sections.static.welcome');
//*/
