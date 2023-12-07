<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagerController;
use App\Http\Controllers\costumeController;
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



Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/inventoryPage', function () {
    return view('inventory');
});

Route::get('/monitorPage', function () {
    return view('cosMonitor');
});

Route::get('/createlist', function () {
    return view('createList');
});

Route::get('/createmon', function () {
    return view('createmon');
});


Route::get('/register', [UserManagerController::class, 'register'])->name('register');
Route::post('/registration', [UserManagerController::class, 'registrationPost'])->name('registration.post');

Route::get('/login', [UserManagerController::class, 'login'])->name('login');
Route::post('/loginpage', [UserManagerController::class, 'loginPost'])->name('login.post');

Route::get('/inventoryPage', [UserManagerController::class, 'inventoryPage'])->name('inventoryPage');

Route::get('/monitorPage', [costumeController::class, 'monitorPage'])->name('monitorPage');

Route::get('/createlist', [costumeController::class, 'createlist'])->name('createlist');
Route::post('/createlist', [costumeController::class, 'createlistPost'])->name('createlistPost');

Route::get('/createmon', [costumeController::class, 'createmon'])->name('createmon');

