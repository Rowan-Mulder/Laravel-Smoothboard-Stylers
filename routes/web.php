<?php

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



//*/ For visitors
// Homepage
Route::get('/', [PageController::class, 'home'])->name('home');



//*/


//*/ Administrators // TODO: Auth Middleware nog toepassen?

// Materials
Route::resource('/materials', MaterialController::class, [
    'names' => [
        'index' => 'materials',
//        'store' => 'materials.new',
//        'edit' => 'materials.edit',
    ]
]);

// Surfboard Model Types
Route::resource('/surfboard-model-types', SurfboardModelTypeController::class, [
    'names' => [
        'index' => 'surfboard-model-types',
    ]
]);

// Authentication for administrators
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
