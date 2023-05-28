<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\TasksController;
use App\Http\Controllers\ProductController;

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
    }
);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
