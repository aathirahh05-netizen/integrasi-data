use App\Http\Controllers\Api\DimMahasiswaController;
use App\Http\Controllers\Api\DimProdiController;
use App\Http\Controllers\Api\DimJenisOrgController;
use App\Http\Controllers\Api\DimSuratController;

Route::get('/dim-mahasiswa', [DimMahasiswaController::class, 'index']);
Route::get('/dim-prodi', [DimProdiController::class, 'index']);
Route::get('/dim-jenis-org', [DimJenisOrgController::class, 'index']);
Route::get('/dim-surat', [DimSuratController::class, 'index']);