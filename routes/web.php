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
    Route::resource('deptMaster', App\Http\Controllers\DeptMasterController::class);
    Route::resource('districtMaster', App\Http\Controllers\DistrictMasterController::class);
    Route::resource('grievance', App\Http\Controllers\GrievanceController::class);
    Route::resource('userMaster', App\Http\Controllers\UserMasterController::class);

});

require __DIR__.'/auth.php';
