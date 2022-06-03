<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\TrainingController;

use App\Http\Controllers\infokerjaController;



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
Route::get('masyarakat/certificate', [CertificateController::class, 'index'])->name('masyarakat.certificate.index')->middleware('is_masyarakat');
Route::get('masyarakat/certificate/search', [CertificateController::class, 'search'])->name('masyarakat.certificate.search')->middleware('is_masyarakat');
Route::get('masyarakat/certificate/{certificate}/download', [CertificateController::class, 'download'])->name('masyarakat.certificate.download')->middleware('is_masyarakat');

//Routes Informasi Pekerjaan
Route::get('infokerja', [App\Http\Controllers\infokerjaController::class, 'index']);
Route::get('infokerja/create', [App\Http\Controllers\infokerjaController::class, 'create']);
Route::post('infokerja/store', [App\Http\Controllers\infokerjaController::class, 'store']);
Route::get('infokerja/edit/{id}', [App\Http\Controllers\infokerjaController::class, 'edit']);
Route::post('infokerja/update/{id}', [App\Http\Controllers\infokerjaController::class, 'update']);
Route::get('infokerja/delete/{id}', [App\Http\Controllers\infokerjaController::class, 'destroy']);
Route::post('/infokerja/search/{id}', [infokerjaController::class, 'search'])->name('searching');

//Routes Training Skill
Route::get('training', [App\Http\Controllers\TrainingController::class, 'index']);
// Route::get('/verif', [AdmController::class, 'verifadmin']);
Route::get('training/create', [App\Http\Controllers\TrainingController::class, 'create']);
Route::post('training/store', [App\Http\Controllers\TrainingController::class, 'store']);
Route::get('training/edit/{id}', [App\Http\Controllers\TrainingController::class, 'edit']);
Route::post('training/update/{id}', [App\Http\Controllers\TrainingController::class, 'update']);
Route::get('training/delete/{id}', [App\Http\Controllers\TrainingController::class, 'destroy']);
Route::post('/training/search/{id}', [TrainingController::class, 'search'])->name('searching');
Route::post('masyarakat/training', [TrainingController::class, 'status'])->name('status');

// Route Training Masyarakat
Route::get('masyarakat/training', [App\Http\Controllers\UserTrainingController::class, 'index'])->name('masyarakat.training.index');
Route::post('masyarakat/training/search/{id}', [App\Http\Controllers\UserTrainingController::class, 'search'])->name('masyarakat.training.searching');
Route::get('masyarakat/training/{id}', [App\Http\Controllers\UserTrainingController::class, 'show']);
Route::post('masyarakat/training/{id}/store', [App\Http\Controllers\UserTrainingController::class, 'store']);
Route::get('masyarakat/training/{id}/detail', [App\Http\Controllers\UserTrainingController::class, 'detail']);
// Route::get('/verif', [AdmController::class, 'verifadmin']);
// Route::get('training/create', [App\Http\Controllers\TrainingController::class, 'create']);
// Route::post('training/store', [App\Http\Controllers\TrainingController::class, 'store']);
// Route::get('training/edit/{id}', [App\Http\Controllers\TrainingController::class, 'edit']);
// Route::post('training/update/{id}', [App\Http\Controllers\TrainingController::class, 'update']);
// Route::get('training/delete/{id}', [App\Http\Controllers\TrainingController::class, 'destroy']);
// Route::post('/training/search/{id}', [TrainingController::class, 'search'])->name('searching');

//Routes Validasi Data User
Route::get('/verif', [AdmController::class, 'verifadmin']);
Route::post('/verif/search/{id}', [AdmController::class, 'search'])->name('searching');
Route::post('/verif/update', [AdmController::class, 'update'])->name('update_status');

//Routes Akses data pengguna
Route::get('/aksesdata', [App\Http\Controllers\DataUserController::class, 'read'])->name('datauser');
Route::get('aksesdata/edit/{id}', [App\Http\Controllers\DataUserController::class, 'edit']);
Route::post('aksesdata/update/{id}', [App\Http\Controllers\DataUserController::class, 'update']);
Route::get('aksesdata/delete/{id}', [App\Http\Controllers\DataUserController::class, 'destroy']);
Route::get('/aksesdata/edit-password/{id}', [App\Http\Controllers\DataUserController::class, 'editPasswordProfile']);
Route::post('/aksesdata/update-password/{id}', [App\Http\Controllers\DataUserController::class, 'updatePasswordProfile']);
Route::post('/aksesdata/search/{id}', [App\Http\Controllers\DataUserController::class, 'search'])->name('searching');
