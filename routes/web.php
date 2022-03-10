<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    PelangganController,
    AdminController,
    TarifController
};

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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', [AuthController::class,'viewLogin'])->middleware('guest')->name('login');
Route::get('/register', [AuthController::class,'viewRegister'])->middleware('guest')->name('regist');
Route::post('/register', [AuthController::class,'register'])->middleware('guest')->name('register');
Route::post('/login', [AuthController::class,'login'])->middleware('guest')->name('loginProses');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::group(['auth:sanctum'], function() {
    Route::middleware('role:admin')->prefix('admin')->group(function(){
        Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');
    });
    Route::middleware('role:pelanggan')->prefix('pelanggan')->group(function(){
        Route::get('/dashboard', [PelangganController::class,'index'])->name('dashboardUser');

        // Tarif Table
        Route::get('/data-tarif', [TarifController::class,'index'])->name('tarif');
        Route::post('/saveTarif', [TarifController::class,'store'])->name('saveTarif');
        Route::get('/editTarif/{id}', [TarifController::class,'edit'])->name('editTarif');
        Route::post('/updateTarif/{id}', [TarifController::class,'update'])->name('updateTarif');
        Route::get('/deleteTarif/{id}', [TarifController::class,'destroy'])->name('deleteTarif');
    });
    
});
