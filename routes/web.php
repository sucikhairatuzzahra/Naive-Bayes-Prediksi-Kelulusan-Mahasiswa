<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NaiveController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

//LOGIN REGISTER
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('loginaksi', [LoginController::class, 'loginaksi'])->name('user.loginaksi');
Route::get('logoutaksi', [LoginController::class, 'logoutaksi'])->name('user.logoutaksi')->middleware('auth');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('registeraksi', [RegisterController::class, 'registeraksi'])->name('registeraksi');


//HALAMAN ADMIN
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard'); //halaman dashboard
Route::get('datatesting', [AdminController::class, 'datatesting'])->name('datatesting');
Route::get('datatraining', [AdminController::class, 'datatraining'])->name('datatraining'); //halaman mahasiswa user adalah role=mahasiswa
Route::get('/edittraining', [AdminController::class, 'edittraining'])->name('edittraining');
Route::post('updatetraining', [AdminController::class, 'updatetraining'])->name('updatetraining');

//HALAMAN USER
Route::get('beranda', [UserController::class, 'beranda'])->name('beranda');
Route::get('userinput', [UserController::class, 'userinput'])->name('userinput');
Route::get('klasifikasi', [UserController::class, 'klasifikasi'])->name('klasifikasi');
Route::post('useraksi', [UserController::class, 'useraksi'])->name('useraksi');
//ALGORITMA NAIVE
// Route::get('clasifYIpk', [NaiveController::class, 'clasifYIpk'])->name('clasifYIpk');
// Route::get('getProbabilitas', [NaiveController::class, 'getProbabilitas'])->name('getProbabilitas');


// Route::get('totalDataTraining', [UserController::class, 'totalDataTraining'])->name('totalDataTraining');
// Route::get('jumlahDataKelas', [UserController::class, 'jumlahDataKelas'])->name('jumlahDataKelas');
// Route::get('priorProbability', [UserController::class, 'priorProbability'])->name('priorProbability');
// Route::post('conditionalProbability', [UserController::class, 'conditionalProbability'])->name('conditionalProbability');
// Route::get('posteriorProbability', [UserController::class, 'posteriorProbability'])->name('posteriorProbability');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
