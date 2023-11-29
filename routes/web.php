<?php

use App\Http\Controllers\{
    HomeController, ProfileController, ResourceController,
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

Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/publish', [ResourceController::class, 'create'])->name('publish.create');
    Route::post('/publish/store', [ResourceController::class, 'store'])->name('publish.store');
    Route::get('/resource/show/{slug}', [ResourceController::class, 'show'])->name('resource.show');
});

require __DIR__.'/auth.php';
