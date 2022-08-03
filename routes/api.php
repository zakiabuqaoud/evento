<?php

use App\Http\Controllers\Api\companiesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('companies/index', [companiesController::class, 'index'])->name('companies.index');
Route::get('companies/show', [companiesController::class, 'show'])->name('companies.show');
Route::post('companies/store', [companiesController::class, 'store'])->name('companies.store');
Route::put('companies/update/{id}', [companiesController::class, 'update'])->name('companies.update');
Route::delete('companies/delete/{id}', [companiesController::class, 'destroy'])->name('companies.delete');
//rating
//Route::get('companies/rating/{id}',[companiesController::class, 'rating'])->name('companies.rating'));