<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlacementsController;
use App\Http\Controllers\complainSetupController;
Route::get('/', function () {
    return view('login');
});


Route::get('/dashboard', function () {return view('dashboard');});
Route::get('/register', function () {return view('registerForm');});//complain Register Form
Route::get('/complainAdmin', function () {return view('complainHistoryAdmin');});
Route::get('/complainUser', function () {return view('complainHistoryUser');});

Route::get('/assigned', function () {return view('assigned');});
Route::get('/biomedical', function () {return view('biomedicalForm');});

Route::get('/placementSetup', [PlacementsController::class, 'getPlacemets']);

//Route::get('/ReportStatus', [ReportStatusController::class, 'index'])->name('ReportStatus');

//Route::post('/PatientOrder',[ReportStatusController::class,'PatientOrder'])->name('PatientOrder');

//Route::post('/details',[ReportStatusController::class,'getPatientDetails']);

Route::post('/savePlacement',[PlacementsController::class,'savePlacement'])->name("savePlacement");

Route::post('/searchPlacement',[PlacementsController::class,'searchPlacement'])->name("searchPlacement");

Route::post('/updatePlacement',[PlacementsController::class,'updatePlacement'])->name("updatePlacement");


Route::post('/searchComplain',[complainSetupController::class,'searchComplain'])->name("searchComplain");

Route::post('/updateComplain',[complainSetupController::class,'updateComplain'])->name("updateComplain");
Route::post('/saveComplain',[complainSetupController::class,'saveComplain'])->name("saveComplain");


Route::get('/complainSetup',[complainSetupController::class,'complainSetupView']);

//Route::get('/api/departments', [DepartmentController::class, 'getDepartments']);
