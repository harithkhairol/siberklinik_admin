<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TimeSlotController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

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

Route::get('/appointment/{id}/{title}', [AppointmentController::class, 'show'])->name('appointment.show');

Route::get('/appointment/{id}/{title}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');

Route::post('/appointment/{id}/update', [AppointmentController::class, 'update'])->name('appointment.update');

Route::post('/appointment/{id}/update-outcome', [AppointmentController::class, 'updateOutcome'])->name('appointment.update.outcome');

Route::get('/appointment/{id}/{title}/reschedule/date', [AppointmentController::class, 'rescheduleDate'])->name('appointment.reschedule.date');

Route::get('/appointment/{id}/{title}/reschedule/date/time', [AppointmentController::class, 'rescheduleTime'])->name('appointment.reschedule.time');

Route::post('/appointment/{id}/reschedule', [AppointmentController::class, 'reschedule'])->name('appointment.reschedule');

Route::post('/appointment/{id}/delete', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

Route::get('/doctor/register', [DoctorController::class, 'register'])->name('doctor.register');

Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor');

Route::get('/doctor/{email}/', [DoctorController::class, 'show'])->name('doctor.show');

Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');

Route::post('/doctor/{email}/update', [DoctorController::class, 'update'])->name('doctor.update');

Route::post('/doctor/{email}/delete', [DoctorController::class, 'destroy'])->name('doctor.destroy');

Route::get('/timeslot', [TimeSlotController::class, 'index'])->name('timeslot');

Route::get('/timeslot/{day}', [TimeSlotController::class, 'show'])->name('timeslot.show');

Route::get('/timeslot/{day}/{time}', [TimeSlotController::class, 'edit'])->name('timeslot.edit');

Route::post('/timeslot/{day}/{time}/update', [TimeSlotController::class, 'update'])->name('timeslot.update');

Route::post('/timeslot/{day}/{time}/{email}/delete', [TimeSlotController::class, 'destroy'])->name('timeslot.destroy');

Route::get('/user/register', [AdminController::class, 'create'])->name('user.register');

Route::post('/user/store', [AdminController::class, 'store'])->name('user.store');

Route::get('/user', [AdminController::class, 'index'])->name('user');

Route::get('/user/{email}/', [AdminController::class, 'show'])->name('user.show');

Route::post('/user/{email}/update', [AdminController::class, 'update'])->name('user.update');

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');

Route::post('/customer/{email}/delete', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::get('/customer/{email}/', [CustomerController::class, 'show'])->name('customer.show');

Route::post('/customer/{email}/update', [CustomerController::class, 'update'])->name('customer.update');

require __DIR__.'/auth.php';
