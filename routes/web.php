<?php
use App\Http\Controllers\OlahragaPopulerIndonesiaController;
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

Route::get('/', [OlahragaPopulerIndonesiaController::class, 'index']); 
Route::get('/tambah', [OlahragaPopulerIndonesiaController::class, 'tambah']); 
Route::post('/tambah', [OlahragaPopulerIndonesiaController::class, 'store']);
Route::get('/hapus/{id}', [OlahragaPopulerIndonesiaController::class, 'hapus']);
Route::get('/edit/{id}', [OlahragaPopulerIndonesiaController::class, 'edit']);
Route::post('/edit/{id}', [OlahragaPopulerIndonesiaController::class, 'update']);
Route::get('/lihat/{id}', [OlahragaPopulerIndonesiaController::class, 'lihat']);

