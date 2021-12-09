<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\DemobaseController;
use App\Http\Controllers\ImportController;

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

Route::get('/', [ClientController::class, 'home']);

Route::get('/form', [TableController::class, 'form']);
Route::post('/storeClient', [TableController::class, 'storeClient']);

Route::get('/rma-base', [BaseController::class, 'rmabase']);
Route::get('/rma-regist', [BaseController::class, 'rmaregist']);
Route::post('/storeRma',  [BaseController::class, 'storeRma']);
Route::get('/rma-check', [BaseController::class, 'rmacheck']);
Route::get('/add-rma', [BaseController::class, 'addRmaBaseForm']);

Route::get('/demo-base', [DemobaseController::class, 'demobase']);
Route::get('/demo-device-add', [DemobaseController::class, 'demoDeviceAdd']);
Route::post('/storeDevice',  [DemobaseController::class, 'storeDevice']);
Route::get('/demo-contract-add', [DemobaseController::class, 'demoContractAdd']);
Route::post('/storeContract',  [DemobaseController::class, 'storeContract']);
Route::get('/demo-contract-check', [DemobaseController::class, 'demoContractCheck']);

Route::get('/sn-import', [ImportController::class, 'snImport']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/clients', [TableController::class, 'clients']);

require __DIR__.'/auth.php';
