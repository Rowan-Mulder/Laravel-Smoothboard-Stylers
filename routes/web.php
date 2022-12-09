<?php

use App\Models\Material;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SurfboardModelTypeController;
use App\Http\Controllers\PageController;
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
Route::get('/', [PageController::class, 'home']);

//*/

//*/ Voor beheerders // TODO: Auth Middleware nog toepassen.
// Materialen
Route::resource('Materialen', MaterialController::class)->parameters(['Materialen' => 'material']); // parameters() overwrite de route placeholder name, te zien tussen {} in 'php artisan route:list'. Dit heeft effect in MaterialenController voor parameter objectnamen, aangezien we de Nederlandse routings willen behouden.

// SurfboardModelTypes
Route::resource('SurfboardModelTypes', SurfboardModelTypeController::class)->parameters(['SurfboardModelTypes' => 'surfboardModelType']);

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
