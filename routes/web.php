<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'indexx'])->name('login_form');
    // Route::get('/user_login', [UserController::class, 'users_login'])->name('user.login');
    // Route::any('/login_owner', [UserController::class, 'login'])->name('user.owner');
    // Route::post('/register', [UserController::class, 'register'])->name('register.owner');
    // Route::get('/user_logout', [UserController::class, 'users_logout'])->name('user.logout');
    
    // Route::get('/candidates', [UserController::class, 'candidate_home'])->name('candidate_view')->middleware('userses');
    
    });

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
