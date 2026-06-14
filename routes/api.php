<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DimMahasiswaController;
use App\Http\Controllers\Api\DimProdiController;
use App\Http\Controllers\Api\DimJenisOrgController;
use App\Http\Controllers\Api\DimSuratController;

// dim_mahasiswa
Route::prefix('dim-mahasiswa')->group(function () {
    Route::get('/',        [DimMahasiswaController::class, 'index']);
    Route::get('/{id}',    [DimMahasiswaController::class, 'show']);
    Route::post('/',       [DimMahasiswaController::class, 'store']);
    Route::put('/{id}',    [DimMahasiswaController::class, 'update']);
    Route::delete('/{id}', [DimMahasiswaController::class, 'destroy']);
});

// dim_prodi
Route::prefix('dim-prodi')->group(function () {
    Route::get('/',        [DimProdiController::class, 'index']);
    Route::get('/{id}',    [DimProdiController::class, 'show']);
    Route::post('/',       [DimProdiController::class, 'store']);
    Route::put('/{id}',    [DimProdiController::class, 'update']);
    Route::delete('/{id}', [DimProdiController::class, 'destroy']);
});

// dim_jenis_org
Route::prefix('dim-jenis-org')->group(function () {
    Route::get('/',        [DimJenisOrgController::class, 'index']);
    Route::get('/{id}',    [DimJenisOrgController::class, 'show']);
    Route::post('/',       [DimJenisOrgController::class, 'store']);
    Route::put('/{id}',    [DimJenisOrgController::class, 'update']);
    Route::delete('/{id}', [DimJenisOrgController::class, 'destroy']);
});

// dim_surat
Route::prefix('dim-surat')->group(function () {
    Route::get('/',        [DimSuratController::class, 'index']);
    Route::get('/{id}',    [DimSuratController::class, 'show']);
    Route::post('/',       [DimSuratController::class, 'store']);
    Route::put('/{id}',    [DimSuratController::class, 'update']);
    Route::delete('/{id}', [DimSuratController::class, 'destroy']);
});