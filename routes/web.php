<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class,'index']);

Route::get('/home', [HomeController::class,'redirect']);
Route::post('/appointment', [HomeController::class,'makeappointment'])->middleware('auth','verified');
Route::get('/myappointment', [HomeController::class,'getmyappointment']);
Route::get('/cancelAppointment/{id}', [HomeController::class,'cancel_appointment']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view', [AdminController::class,'addview']);
Route::POST('/upload_doctor', [AdminController::class,'upload']);
Route::get('/doctor_appointments', [AdminController::class,'getDoctorAppointments']);
Route::get('/aprove/{id}', [AdminController::class,'approveAppointment']);
Route::get('/cancel/{id}', [AdminController::class,'cancelAppointment']);
Route::get('/allDoctor', [AdminController::class,'showallDoctor']);
Route::get('/delete/{id}', [AdminController::class,'deleteDoctor']);
Route::get('/update/{id}', [AdminController::class,'updateDoctor']);
Route::post('/editdoctor/{id}', [AdminController::class,'editdoctor']);
