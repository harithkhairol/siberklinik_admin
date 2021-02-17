<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TimeSlotController;

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
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/today', [AppointmentController::class, 'today'])->name('appointment.today');

Route::get('/upcoming', [AppointmentController::class, 'upcoming'])->name('appointment.upcoming');

Route::get('/history', [AppointmentController::class, 'history'])->name('appointment.history');

Route::get('/doctor/register', [DoctorController::class, 'register'])->name('doctor.register');

Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor');

Route::get('/doctor/{email}/', [DoctorController::class, 'show'])->name('doctor.show');

Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');

Route::post('/doctor/{email}/update', [DoctorController::class, 'update'])->name('doctor.update');

Route::post('/doctor/{email}/delete', [DoctorController::class, 'destroy'])->name('doctor.destroy');

Route::get('/timeslot', [TimeSlotController::class, 'index'])->name('timeslot');

Route::get('/timeslot/{day}', [TimeSlotController::class, 'show'])->name('timeslot.show');

Route::post('/timeslot/{day}/update', [TimeSlotController::class, 'update'])->name('timeslot.update');

require __DIR__.'/auth.php';
