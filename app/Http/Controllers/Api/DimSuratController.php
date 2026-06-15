<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DimSurat;

class DimSuratController extends Controller
{
    public function index() {
        return response()->json(['status' => 'success', 'data' => DimSurat::all()], 200);
    }
}