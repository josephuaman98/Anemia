<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'admin'])->group(function(){ // Middleware

// Rutas : Especialidades
Route::get('/especialidades', [App\Http\Controllers\admin\SpecialtyController::class, 'index']);
Route::get('/especialidades/create', [App\Http\Controllers\admin\SpecialtyController::class, 'create']);
Route::get('/especialidades/{specialty}/edit', [App\Http\Controllers\admin\SpecialtyController::class, 'edit']);
Route::post('/especialidades', [App\Http\Controllers\admin\SpecialtyController::class, 'sendData']); //envio de informacion a la base de datos (guardar datos)
Route::put('/especialidades/{specialty}', [App\Http\Controllers\admin\SpecialtyController::class, 'update']);
Route::delete('/especialidades/{specialty}', [App\Http\Controllers\admin\SpecialtyController::class, 'destroy']);

// Rutas : Medicos
Route::resource('medicos', 'App\Http\Controllers\admin\DoctorController');

// Rutas : Pacientes
Route::resource('pacientes', 'App\Http\Controllers\admin\PatientController');

});

Route::middleware(['auth', 'doctor'])->group(function(){ // Middleware
    Route::get('/horario', [App\Http\Controllers\doctor\HorarioController::class, 'edit']);
    Route::post('/horario', [App\Http\Controllers\doctor\HorarioController::class, 'store']);

});

Route::get('/reservarcitas/create', [App\Http\Controllers\AppointmentController::class, 'create']);
Route::post('/miscitas', [App\Http\Controllers\AppointmentController::class, 'store']);