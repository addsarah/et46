<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\ProgramtahunanController;
use App\Http\Controllers\ProgramsemesterController;
use App\Http\Controllers\AddsiswaController;
use App\Http\Controllers\RemedialController;


//--------- Admin route-------------/

Route::prefix('admin')->group(function (){

    Route::get('/login', [AdminController::class, 'Index'])->name('admin_login_form');
    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');

    Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');

    Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');

    Route::get('/register',[AdminController::class, 'AdminRegister'])->name('admin.register');
    Route::post('/register/create',[AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');

});
//--------- End Admin route-------------/

//--------- guru route-------------/

Route::prefix('user')->group(function (){

    Route::get('/login',[UserController::class, 'Index'])->name('user_login_form');
    Route::post('/login/user',[UserController::class, 'UserLogin'])->name('user.login');

    Route::get('/dashboard',[userController::class, 'UserDashboard'])->name('user.dashboard')->middleware('user');;
    Route::get('/logout',[userController::class, 'UserLogout'])->name('user.logout')->middleware('user');

    Route::get('/register',[userController::class, 'UserRegister'])->name('user.register');
    Route::post('/register/create',[userController::class, 'UserRegisterCreate'])->name('user.register.create');

    
});

//--------- End guru route-------------/


//--------- Siswa route-------------/

Route::prefix('siswa')->group(function (){

    Route::get('/login',[SiswaController::class, 'Index'])->name('siswa_login_form');
    Route::post('/login/siswa', [SiswaController::class, 'Login'])->name('siswa.login');

    // Contoh rute untuk dashboard siswa
    Route::get('/dashboard',[SiswaController::class, 'Dashboard'])->name('siswa.dashboard')->middleware('siswa');
    Route::get('/logout',[SiswaController::class, 'SiswaLogout'])->name('siswa.logout')->middleware('siswa');
    
    Route::get('/register',[SiswaController::class, 'SiswaRegister'])->name('siswa.register');
    Route::post('/register/create',[SiswaController::class, 'SiswaRegisterCreate'])->name('siswa.register.create');

});
//--------- End Siswa route-------------/


Route::get('/', function () {
return view('welcome');
});

Route::get('/dashboard', function () {
    return view('userdashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('sikap','App\Http\Controllers\SikapController'); 
Route::resource('nilai','App\Http\Controllers\NilaiController');
Route::resource('kktp','App\Http\Controllers\KktpController');
Route::resource('programsemester',ProgramsemesterController::class)->middleware(['auth']);
Route::resource('mapel',MapelController::class)->middleware(['auth']);
Route::resource('programtahunan', ProgramtahunanController::class)->middleware(['auth']);
Route::resource('adduser','App\Http\Controllers\AddUserController');
Route::resource('atp','App\Http\Controllers\AtpController');
Route::resource('kisi_kisi','App\Http\Controllers\Kisi_kisiController');
Route::resource('kartu_soal','App\Http\Controllers\Kartu_soalController');
Route::resource('reportkartu_soal','App\Http\Controllers\ReportKartu_soalController');
Route::resource('ulangan_harian','App\Http\Controllers\Ulangan_harianController');
Route::resource('akhir_semester', 'App\Http\Controllers\Akhir_semesterController');
Route::resource('tengah_semester','App\Http\Controllers\Tengah_semesterController');
Route::resource('siswa','App\Http\Controllers\SiswaController');
Route::resource('addsiswa','App\Http\Controllers\AddsiswaController');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/userdashboard', 'UserController@userDashboard')->name('userdashboard');
Route::get('cetak_kartu_soal','App\Http\Controllers\ReportKartu_soalController@cetak_kartu_soal')->name('cetak_kartu_soal');
Route::get('/user', [UserController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('remedial', [RemedialController::class, 'index'])->name('remedial.index');
Route::get('remedial/create', [RemedialController::class, 'create'])->name('remedial.create');
Route::get('remedial/{nilai}/edit', [RemedialController::class, 'edit'])->name('remedial.edit');
Route::get('remedial/create', [RemedialController::class, 'create'])->name('remedial.create');


Route::post('remedial', [RemedialController::class, 'store'])->name('remedial.store');
Route::post('remedial/{nilai}', [RemedialController::class, 'update'])->name('remedial.update');
Route::post('remedial', [RemedialController::class, 'store'])->name('remedial.store');
