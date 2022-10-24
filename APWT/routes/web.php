<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/studentSection',[StudentController::class, 'dashboard'])->name('studentSection')->middleware('validUser');
Route::get('/studentCard',[StudentController::class, 'studentCard'])->name('studentCard')->middleware('validUser');
Route::get('/course',[CourseController::class, 'course'])->name('course')->middleware('validUser');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[RegController::class,'register'])->name('register');
Route::post('/register',[RegController::class,'registerSubmit'])->name('register');

