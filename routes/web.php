<?php

use App\Http\Controllers\MasterController;
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
Route::get('/index', [MasterController::class, 'index']);
Route::get('/tabel', [MasterController::class, 'tabel']);
Route::get('/sampling', [MasterController::class, 'sampling']);
//FUNCTION IMPORT EXCEL
Route::post('/import_master', [MasterController::class, 'importmaster']);
Route::post('/import_SOD', [MasterController::class, 'importSOD']);
//FUNCTION EXPORT KE EXCEL
Route::get('/export_master', [MasterController::class, 'exportmaster']);
