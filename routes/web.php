<?php

use App\Http\Controllers\AsyncJobExample;
use App\Http\Controllers\CacheExample;
use App\Http\Controllers\EagearLoadingExemple;
use App\Http\Controllers\QueryBuilderExample;
use App\Models\User;
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
    User::all();
    return view('welcome');
});

Route::get('/eager-loading', EagearLoadingExemple::class);
Route::get('/cache', CacheExample::class);
Route::get('/async-job', AsyncJobExample::class);
Route::get('/query-builder', QueryBuilderExample::class);
Route::get('/env-to-cfg', AsyncJobExample::class);
