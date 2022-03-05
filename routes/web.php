<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ArchivedController;
use App\Http\Controllers\SettingsController;

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

Route::get('/legal', function () {
    return view('legal');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/changemail' , [SettingsController::class,'index'])->name('index')->middleware(['auth']);
Route::put('/changemail/update' , [SettingsController::class,'update'])->name('update')->middleware(['auth']);

Route::get('/change-pass' , [SettingsController::class,'pass'])->name('pass')->middleware(['auth']);
Route::put('/change-pass/update' , [SettingsController::class,'updatepass'])->name('updatepass')->middleware(['auth']);

Route::get('/change-name' , [SettingsController::class,'name'])->name('name')->middleware(['auth']);
Route::put('/change-name/update' , [SettingsController::class,'updatename'])->name('updatename')->middleware(['auth']);

Route::get('/archivedMessages' , [ArchivedController::class,'index'])->name('index')->middleware(['auth']);
Route::get('archive/{id}' , [ArchivedController::class,'show'])->name('show')->middleware(['auth']);
Route::post('/archivedMessages/store/' , [ArchivedController::class,'store'])->name('store')->middleware(['auth']);

Route::get('/report/{id}' , [ArchivedController::class,'report'])->name('report')->middleware(['auth']);
Route::post('/report/store/' , [ArchivedController::class,'reportstore'])->name('reportstore')->middleware(['auth']);

Route::get('/report-archive/{id}' , [ArchivedController::class,'report_archive'])->name('report-archive')->middleware(['auth']);
Route::post('/report-archive/store' , [ArchivedController::class,'report_archive_store'])->name('report-archive')->middleware(['auth']);

Route::get('/settings', function () {
    return view('settings');
})->middleware(['auth'])->name('settings');


Route::get('/messages' , [MessageController::class,'index'])->name('messages')->middleware(['auth'])->name('messages');



require __DIR__.'/auth.php';

Route::get('/{name}' , [MessageController::class,'create'])->name('Send');

Route::post('/{name}/store' , [MessageController::class,'store'])->name('store');

