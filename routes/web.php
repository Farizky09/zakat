<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AmilController;
use App\Http\Controllers\MasjidController;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PembayarController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;


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
    return redirect('/home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', [UserController::class, 'index']);
Route::get('/amil', [UserController::class, 'tampil']);
Route::get('/amil/create', [UserController::class, 'create']);
Route::post('/amil/store', [UserController::class, 'store']);
Route::get('/amil/{id}/edit', [UserController::class, 'edit']);
Route::put('/amil/{id}/', [UserController::class, 'update']);
Route::delete('/amil-delete/{id}/', [UserController::class, 'destroy']);


    Route::get('/masjid', [MasjidController::class, 'index']);
    Route::get('/masjid/create', [MasjidController::class, 'create']);
    Route::post('/masjid/store', [MasjidController::class, 'store']);
    Route::get('/masjid/{id}/edit', [MasjidController::class, 'edit']);
    Route::put('/masjid/{id}/', [MasjidController::class, 'update']);
    Route::delete('/masjid-delete/{id}/', [MasjidController::class, 'destroy']);


    Route::get('/zakat', [ZakatController::class, 'index']);
    Route::get('/zakat/create', [ZakatController::class, 'create']);
    Route::post('/zakat/store', [ZakatController::class, 'store']);
    Route::get('/zakat/{id}/edit', [ZakatController::class, 'edit']);
    Route::put('/zakat/{id}/', [ZakatController::class, 'update']);
    Route::delete('/zakat-delete/{id}/', [ZakatController::class, 'destroy']);


        Route::get('/penerima', [PenerimaController::class, 'index']);
        Route::get('/penerima/create', [PenerimaController::class, 'create']);
        Route::post('/penerima/store', [PenerimaController::class, 'store']);
        Route::get('/penerima/{id}/edit', [PenerimaController::class, 'edit']);
        Route::put('/penerima/{id}/', [PenerimaController::class, 'update']);
        Route::delete('/penerima-delete/{id}/', [PenerimaController::class, 'destroy']);


        Route::get('/pembayar', [PembayarController::class, 'index']);
        Route::get('/pembayar/create', [PembayarController::class, 'create']);
        Route::post('/pembayar/store', [PembayarController::class, 'store']);
        Route::get('/pembayar/{id}/edit', [PembayarController::class, 'edit']);
        Route::put('/pembayar/{id}/', [PembayarController::class, 'update']);
        Route::delete('/pembayar-delete/{id}/', [PembayarController::class, 'destroy']);

        Route::get('/pembayaran', [PembayaranController::class, 'index']);
        Route::get('/pembayaran/create', [PembayaranController::class, 'create']);
        Route::post('/pembayaran/store', [PembayaranController::class, 'store']);
        Route::get('/pembayaran/{id}/edit', [PembayaranController::class, 'edit']);
        Route::put('/pembayaran/{id}/', [PembayaranController::class, 'update']);
        Route::delete('/pembayaran-delete/{id}/', [PembayaranController::class, 'destroy']);

        Route::get('/penerimaan', [PenerimaanController::class, 'index']);
        Route::get('/penerimaan/create', [PenerimaanController::class, 'create']);
        Route::post('/penerimaan/store', [PenerimaanController::class, 'store']);
        Route::get('/penerimaan/{id}/edit', [PenerimaanController::class, 'edit']);
        Route::put('/penerimaan/{id}/', [PenerimaanController::class, 'update']);
        Route::delete('/penerimaan-delete/{id}/', [PenerimaanController::class, 'destroy']);

        Route::get('/stock', [StockController::class, 'index']);
        Route::get('/stock/create', [StockController::class, 'create']);
        Route::post('/stock/store', [StockController::class, 'store']);
        Route::get('/stock/{id}/edit', [StockController::class, 'edit']);
        Route::put('/stock/{id}/', [StockController::class, 'update']);
        Route::delete('/stock-delete/{id}/', [StockController::class, 'destroy']);
