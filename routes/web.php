<?php

use App\Models\Material;
use App\Http\Controllers\PagesController;
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
Route::get('/', [PagesController::class, 'home']);

//*/

//*/ Voor beheerders // TODO: Auth Middleware nog toepassen.
// Materialen
Route::get('/Materialen', fn() => view('web.sections.material.index', ['materials' => Material::all()]));
Route::get('/Materialen/details/{material}', fn(Material $material) =>view('web.sections.material.details', ['material' => $material]));
Route::get('/Materialen/edit/{material}', fn(Material $material) => view('web.sections.material.edit', ['material' => $material]));

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
