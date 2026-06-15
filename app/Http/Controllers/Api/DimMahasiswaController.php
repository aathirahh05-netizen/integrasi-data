<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DimMahasiswa;

class DimMahasiswaController extends Controller
{
    public function index() {
        return response()->json(['status' => 'success', 'data' => DimMahasiswa::all()], 200);
    }
}