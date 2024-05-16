<?php

use App\Http\Controllers\ProfileController;
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
    return redirect()->route('login');
    // return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.get');
    
    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    //route for user
    //route for user profile
     Route::get('/userprofile/{id}',[ProfileController::class,'us'])->name('userprofile');

    Route::post('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/delete/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route for view user detail

    Route::get('/view/{id}',[ProfileController::class,'view'])->name('profile.user');
});

require __DIR__.'/auth.php';
