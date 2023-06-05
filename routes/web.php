<?php

use App\Http\Controllers\AuthController;
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

Route::group(['middleware' => ['web']], function () {
    // your routes here
    Route::get('/auth/redirect', [AuthController::class, 'github']);

    Route::get('/auth/callback', [AuthController::class, 'github_redirect']);

    Route::get('/auth/google/redirect', [AuthController::class, 'google']);

    Route::get('/auth/google/callback', [AuthController::class, 'google_redirect']);

});
