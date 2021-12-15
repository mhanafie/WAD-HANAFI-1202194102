<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccinesController;
use App\Http\Controllers\PatientsController;

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
    return view('home', [
        "pos" => "home",
        "title" => "Website Vaksin"
    ]);
})->name('home');

Route::get('/vaccine', [VaccinesController::class, 'index'])->name('vaccine.index');
Route::get('/vaccine/tambah', [VaccinesController::class, 'tambah'])->name('vaccine.tambah');
Route::get('/vaccine/tambah', [VaccinesController::class, 'add'])->name('vaccine.add');
Route::get('/vaccine/edit/{id}', [VaccinesController::class, 'edit'])->name('vaccine.edit');
Route::post('/vaccine/edit/{id}', [VaccinesController::class, 'replace'])->name('vaccine.replace');
Route::get('/vaccine/delete/{id}', [VaccinesController::class, 'drop'])->name('vaccine.drop');
Route::get('/patient/vaccine', [VaccinesController::class, 'pilih'])->name('patient.pilih');

Route::get('/patient', [PatientsController::class, 'index'])->name('patient.index');
Route::get('/patient/vaccine/{vaccine:id}', [PatientsController::class, 'tambah'])->name('patient.tambah');
Route::post('/patient/vaccine/{id}', [PatientsController::class, 'add'])->name('patient.add');
Route::get('/patient/edit/{id}', [PatientsController::class, 'edit'])->name('patient.edit');
Route::post('/patient/edit/{id}', [PatientsController::class, 'replace'])->name('patient.replace');
Route::get('/patient/delete/{id}', [PatientsController::class, 'drop'])->name('patient.drop');

