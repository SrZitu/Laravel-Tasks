<?php

use App\Http\Controllers\PostController;
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

Route::get('/excerptDescription', [PostController::class, 'excerptDescription']);

Route::get('/distinctSelect', [PostController::class, 'distinctSelect']);

Route::get('/retriveFirst', [PostController::class, 'retriveFirst']);

Route::get('/description', [PostController::class, 'description']);

Route::get('/title', [PostController::class, 'title']);

Route::post('/insertData', [PostController::class, 'insertData']);

Route::patch('/update ', [PostController::class, 'update']);

Route::delete('/delete  ', [PostController::class, 'delete']);

Route::get('/minData  ', [PostController::class, 'minData']);

Route::get('/incrementByOne  ', [PostController::class, 'incrementByOne']);
