<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DimJenisOrg;

class DimJenisOrgController extends Controller
{
    public function index() {
        return response()->json(['status' => 'success', 'data' => DimJenisOrg::all()], 200);
    }
}