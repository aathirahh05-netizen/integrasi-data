<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DimJenisOrg;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DimJenisOrgController extends Controller
{
    public function index(): JsonResponse {
        $data = DimJenisOrg::all();
        return response()->json(['status' => 'success', 'total' => $data->count(), 'data' => $data], 200);
    }

    public function show($id): JsonResponse {
        $org = DimJenisOrg::find($id);
        if (!$org) return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        return response()->json(['status' => 'success', 'data' => $org], 200);
    }

    public function store(Request $request): JsonResponse {
        $validated = $request->validate([
            'jenis_organisasi' => 'required|string|max:50',
            'nama_organisasi'  => 'required|string|max:100',
        ]);
        $org = DimJenisOrg::create($validated);
        return response()->json(['status' => 'success', 'message' => 'Data berhasil ditambahkan', 'data' => $org], 201);
    }

    public function update(Request $request, $id): JsonResponse {
        $org = DimJenisOrg::find($id);
        if (!$org) return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        $validated = $request->validate([
            'jenis_organisasi' => 'sometimes|string|max:50',
            'nama_organisasi'  => 'sometimes|string|max:100',
        ]);
        $org->update($validated);
        return response()->json(['status' => 'success', 'message' => 'Data berhasil diperbarui', 'data' => $org], 200);
    }

    public function destroy($id): JsonResponse {
        $org = DimJenisOrg::find($id);
        if (!$org) return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        $org->delete();
        return response()->json(['status' => 'success', 'message' => 'Data ID ' . $id . ' berhasil dihapus'], 200);
    }
}