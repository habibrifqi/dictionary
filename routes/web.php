<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\KamusController; 

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/by', function () {
    return view('byhuruf');
});
Route::get('/dd', function () {
    return view('dictionary');
})->name('dd');;
// Route::get('/singup', function () {
//     return view('singup');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/dictionarys/{huruf}', [KamusController::class, 'huruf'])->name('huruf');
Route::get('/dictionarys', [KamusController::class, 'huruf'])->name('dictionarys');
Route::get('/dictionary/{id}', [KamusController::class, 'dictionary'])->name('dictionary');
// Route::get('/dictionarys', [KamusController::class, 'kamus'])->name('dictionarys');
// Route::get('/login', 'LoginController@showLoginForm')->name('login');
// Route::post('/login', 'LoginController@login')->name('login.submit');