<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//* route for login page
Route::get('/', [HomeController::class, 'home']);
Route::get('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'create_user']);
Route::get('forgot', [AuthController::class, 'forgot']);
