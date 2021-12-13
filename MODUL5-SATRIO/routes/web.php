<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\vaccineController;
Use App\Http\Controllers\patientController;

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
    return view('home');
});

// Route::get('/vaccine', function () {
//     return view('vaccine');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/vaccine', [vaccineController::class, 'addVaccine'] )->name('vaccine');

Route::get('/vaccine/input', [vaccineController::class, 'index'] );
Route::post('/vaccine/input', [vaccineController::class, 'store'] );

Route::get('/vaccine/delete/{id}', [vaccineController::class, 'deleteVaccine'] );

Route::get('/vaccine/edit', [vaccineController::class, 'editVaccine'] );
Route::post('/vaccine/edit', [vaccineController::class, 'postEdit'] );

Route::get('/patient', [patientController::class, 'index'] )->name('patient');

Route::get('/patient/register', [patientController::class, 'listVaksin'] );

Route::get('/patient/vaccine/{id}', [patientController::class, 'registerPatient'] );
Route::post('/patient/vaccine/{id}', [patientController::class, 'postPatient'] );

Route::get('/patient/edit/{id}', [patientController::class, 'editPatient'] );
Route::post('/patient/edit/{id}', [patientController::class, 'postEdit'] );

Route::get('/patient/delete/{id}', [patientController::class, 'deletePatient'] );


