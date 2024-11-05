<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataImportController;
use App\Http\Controllers\DataListController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RecordController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/import', [DataImportController::class, 'import']);
Route::post('/import-records', [RecordController::class, 'import']);
//Route::get('/data', [DataImportController::class, 'index']);

//Route::get('/lists', [DataListController::class, 'getAllLists']);
Route::get('/data', [DataListController::class, 'searchWithArtist']);
Route::get('/demolists', [DemoController::class, 'getDemoList']);
