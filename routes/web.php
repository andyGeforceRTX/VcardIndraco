<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VCardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [VCardController::class, 'create']);

Route::get('/create', [VCardController::class, 'create'])->name('vcard.create');
Route::post('/store', [VCardController::class, 'store'])->name('vcard.store');
Route::get('/vcard/{id}', [VCardController::class, 'show'])->name('vcard.show');
 //nampilne data sing bar kesimpen


 //Route gawe halaman admin
Route::get('/admin/create', [VCardController::class, 'adminCreate'])->name('admin.create');
Route::post('/admin/store', [VCardController::class, 'adminStore'])->name('admin.store');


 //tak gawe route nggo nampilne Vcard sing mari di imput kimau
Route::get('/vcards', [VCardController::class, 'index'])->name('vcards.index');
