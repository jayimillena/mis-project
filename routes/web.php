<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\{
    LoginController, RegisterController,
    LogoutController, ForgotPasswordController,    
};
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


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    Route::group(['middleware' => ['guest']], function() {

        // Register routes
        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

        // Register routes
        Route::get('/forgotpass', [ForgotPasswordController::class, 'show'])->name('forgotpass.show');
        Route::post('/forgotpass', [ForgotPasswordController::class, 'forgotpass'])->name('forgotpass.perform');

        // Login routes
        Route::get('/login', [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        // Logout routes
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

        // Home routes
        Route::get('/', [HomeController::class, 'index'])->name('home.index');
    });
});

Route::get('/compose', function () {
    return view('compose');
})->name('compose.index');

