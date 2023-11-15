<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/frontend/index', function () {
    return view('frontend/index');
});

Route::get('/backend/index', function () {
    return view('backend/index');
});
Route::get('backend/kategori/index', [KategoriController::class, 'index'])->name('backend.kategori.index');
Route::get('backend/kategori/create', [KategoriController::class, 'create']);
Route::post('backend/kategori/store', [KategoriController::class, 'store']);
Route::get('/backend/kategori/{id}/edit', [KategoriController::class, 'edit']);
