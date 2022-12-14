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

//Non Authenticated Routes
Route::get('/', [App\Http\Controllers\PageController::class, 'welcome'])->name('/');
Route::get('contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('notifications', [App\Http\Controllers\PageController::class, 'notifications'])->name('notifications');
Route::get('gallery', [App\Http\Controllers\PageController::class, 'gallery'])->name('gallery');
Route::resource('grievance', App\Http\Controllers\GrievanceController::class);
Route::get('reload-captcha', [App\Http\Controllers\CaptchaController::class, 'reloadCaptcha']);

//Authenticated Page Routes
Route::group(['middleware' => ['auth']],function()
{
    // admin routes
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'homeRedirector' ])->name('dashboard');
    // getDashboardTable
    Route::post('getDashboardTable', [App\Http\Controllers\HomeController::class, 'getDashboardTable' ])->name('getDashboardTable');
    Route::resource('schemeMaster', App\Http\Controllers\SchemeMasterController::class);
    Route::resource('deptMaster', App\Http\Controllers\DeptMasterController::class);
    Route::resource('districtMaster', App\Http\Controllers\DistrictMasterController::class);
    Route::resource('userMaster', App\Http\Controllers\UserMasterController::class);
    Route::resource('applicationForm', App\Http\Controllers\ApplicationFormController::class);
    Route::resource('gallery', App\Http\Controllers\GalleryController::class);
    Route::resource('post', App\Http\Controllers\PostController::class);
    Route::post('postFiles', [App\Http\Controllers\PostController::class, 'fileStore'])->name('postFiles');
    // change password form
    Route::get('changePasswordForm', [App\Http\Controllers\UserMasterController::class, 'changePasswordForm'])->name('changePasswordForm');
    Route::post('changePassword', [App\Http\Controllers\UserMasterController::class, 'changePassword'])->name('changePassword');

    //Bankers routes
    Route::get('bankAppList', [App\Http\Controllers\BankActivitiesController::class, 'bankAppList' ])->name('bankAppList');
    Route::get('bankAppShow/{id}', [App\Http\Controllers\BankActivitiesController::class, 'bankAppShow' ])->name('bankAppShow');
    Route::post('bankAppUpdate', [App\Http\Controllers\BankActivitiesController::class, 'bankAppUpdate' ])->name('bankAppUpdate');
    Route::resource('bankMaster', App\Http\Controllers\BankMasterController::class);
    Route::resource('subsidy', App\Http\Controllers\SubsidyController::class);
    Route::resource('disbursement', App\Http\Controllers\DisbursementController::class);
    Route::resource('misUtilization', App\Http\Controllers\MisutilizationController::class);
    Route::resource('grievanceReply', App\Http\Controllers\GrievanceReplyController::class);
});

require __DIR__.'/auth.php';
