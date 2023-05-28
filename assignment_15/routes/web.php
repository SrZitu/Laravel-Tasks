<?php

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


//Task 1 Route
Route::post('/registrationForm', [TasksController::class, 'validation']);

//Task 2 route
Route::get('/home', [TasksController::class, 'home']);
Route::get('/dashboard', [TasksController::class, 'dashboard']);

//Task 3 route
//checking log
Route::get('/checkLog', [TasksController::class, 'checkLog']);

//Task 4
// middilware to a group route
Route::middleware(['AuthMiddleware'])->group(function () {
    Route::get('/profile/{password}', [TasksController::class, 'profile']);
    Route::get('/settings/{password}', [TasksController::class, 'settings']);
});

//Task 5 CRUD Routes
Route::prefix('Products')->group(
    function () {
        Route::get('/getAllData', [ProductController::class, 'index']);
        Route::get('/create', [ProductController::class, 'create']);
        Route::post('/store', [ProductController::class, 'store']);
        Route::put('/update/{id}', [ProductController::class, 'update']);
        Route::delete('/destroy/{product}', [ProductController::class, 'destroy']);
    }
);
