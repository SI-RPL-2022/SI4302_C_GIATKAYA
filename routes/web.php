<?php

use App\Http\Controllers\AdmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\TrainingController;

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
    return view('welcome');
});


// Route::get('/login', [LoginController::class, 'login']);
// Route::get('/register', [RegisterController::class, 'registrasi']);
// Route::post('/register', [RegisterController::class, 'dashboard']);

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/dashboard2', function () {
    return view('dashboard2');
});
//Route::get('/training', function () {
//   return view('training.index');
//});
// Route::get('/login', [CustomAuthController::class, 'login']);
// Route::get('/regis', [CustomAuthController::class, 'registrasi']);
// Route::post('/regis-user', [CustomAuthController::class, 'registrasiUser'])->name('registrasi-user');


Auth::routes();

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('masyarakat/home', [App\Http\Controllers\HomeController::class, 'masyarakatHome'])->name('masyarakat.home')->middleware('is_masyarakat');
Route::get('training', [App\Http\Controllers\TrainingController::class, 'index']);
// Route::get('/verif', [AdmController::class, 'verifadmin']);
Route::get('training/create', [App\Http\Controllers\TrainingController::class, 'create']);
Route::post('training/store', [App\Http\Controllers\TrainingController::class, 'store']);
Route::get('training/edit/{id}', [App\Http\Controllers\TrainingController::class, 'edit']);
Route::post('training/update/{id}', [App\Http\Controllers\TrainingController::class, 'update']);
Route::get('training/delete/{id}', [App\Http\Controllers\TrainingController::class, 'destroy']);
Route::get('/verif', [AdmController::class, 'verifadmin']);

Route::post('/verif/search/{id}', [AdmController::class, 'search'])->name('searching');

Route::post('/verif/update', [AdmController::class, 'update'])->name('update_status');

