<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebPagesController;

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
//User Routes
Route::get('/', [WebPagesController::class, 'index']);

Route::get('/login', [WebPagesController::class, 'login']);
Route::get('/register', [WebPagesController::class, 'register']);
Route::get('/offices', [WebPagesController::class, 'offices']);
Route::get('/contact', [WebPagesController::class, 'contact']);

Route::get('/logout', [WebPagesController::class, 'logout']);


//Dev Route
Route::get('/status', function () {
    return 'Laravel Php, Status: 200';
});
