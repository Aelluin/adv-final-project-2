<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//* route for login page

Route::get('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::get('forgot', [AuthController::class, 'forgot']);
