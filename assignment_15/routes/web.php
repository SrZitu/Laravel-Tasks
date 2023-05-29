<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\v1\TasksController;

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



//Task 1 Route
Route::post('/registrationForm', [TasksController::class, 'validation']);

//Task 2 route
Route::get('/dashboard', function () {
    return "I'm from dashboard";
});

Route::get('/home', function () {
    return redirect('/dashboard', 302);
});

//Task 3 route
//checking log using global middleware
Route::get('/checkLog', [TasksController::class, 'checkLog']);

//Task 4
// middilware to a group route
Route::middleware(['AuthMiddleware'])->group(function () {
    Route::get('/profile/{password}', [TasksController::class, 'profile']);
    Route::get('/settings/{password}', [TasksController::class, 'settings']);
});

//Task 5 CRUD Postman Routes
// Route::prefix('Products')->group(function () {
//     Route::get('/getAllData', [ProductController::class, 'index']);
//     Route::get('/create', [ProductController::class, 'create']);
//     Route::post('/store', [ProductController::class, 'store']);
//     Route::put('/update/{id}', [ProductController::class, 'update']);
//     Route::delete('/destroy/{product}', [ProductController::class, 'destroy']);
// });

//task 5 with blade routes
Route::get('/homepage', [ProductController::class, 'index'])->name('page.index');
Route::get('/create', [ProductController::class, 'create'])->name('page.create');
Route::post('/store', [ProductController::class, 'store'])->name('page.store');
Route::get('/page/{id}/edit', [ProductController::class, 'edit'])->name('page.edit');
Route::put('/page/{id}', [ProductController::class, 'update'])->name('page.update');
Route::delete('/page/{id}', [ProductController::class, 'destroy'])->name('page.destroy');

//Task 6
Route::post('/contact', ContactController::class);

//Task 7
Route::resource('/product',PostController::class);

//Task 8
Route::get('/', function () {
    return view('welcome');
});
