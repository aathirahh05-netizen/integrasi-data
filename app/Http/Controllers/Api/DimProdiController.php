<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DimProdi;

class DimProdiController extends Controller
{
    public function index() {
        return response()->json(['status' => 'success', 'data' => DimProdi::all()], 200);
    }
}