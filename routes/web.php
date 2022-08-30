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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Non Authenticated Routes 
Route::get('/', [App\Http\Controllers\PageController::class, 'welcome'])->name('/');
Route::get('contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');

//Authenticated Page Routes
Route::group(['middleware' => ['auth']],function()
{
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'homeRedirector' ])->name('dashboard');
    Route::resource('schemeMaster', App\Http\Controllers\SchemeMasterController::class);

});

require __DIR__.'/auth.php';
