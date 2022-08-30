<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Authenticated Page Routes
Route::group(['middleware' => ['auth']],function()
{
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'homeRedirector' ])->name('dashboard');
    Route::resource('schemeMaster', App\Http\Controllers\SchemeMasterController::class);

});

Route::view('contact','pages.contact')->name('contact');
require __DIR__.'/auth.php';
