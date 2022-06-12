<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValkyrieController;

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
    return view('login');
});

Route::get('/valkyrie', [ValkyrieController::Class, 'tampil']);
Route::get('/valkyrie/tambah', [ValkyrieController::Class, 'tambah']);
Route::post('/valkyrie/upload', [ValkyrieController::Class, 'upload']);
Route::get('/valkyrie/edit/{id_valkyrie}', [ValkyrieController::Class, 'edit']);
Route::put('/valkyrie/update/{id_valkyrie}', [ValkyrieController::Class, 'update']);
Route::get('/valkyrie/hapus/{id_valkyrie}', [ValkyrieController::Class, 'hapus']);
