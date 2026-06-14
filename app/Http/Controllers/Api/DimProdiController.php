<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DimProdi;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DimProdiController extends Controller
{
    public function index(): JsonResponse {
        $data = DimProdi::all();
        return response()->json(['status' => 'success', 'total' => $data->count(), 'data' => $data], 200);
    }

    public function show($id): JsonResponse {
        $prodi = DimProdi::find($id);
        if (!$prodi) return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        return response()->json(['status' => 'success', 'data' => $prodi], 200);
    }

    public function store(Request $request): JsonResponse {
        $validated = $request->validate([
            'jenjang'    => 'required|string|max:10',
            'nama_prodi' => 'required|string|max:100',
        ]);
        $prodi = DimProdi::create($validated);
        return response()->json(['status' => 'success', 'message' => 'Data berhasil ditambahkan', 'data' => $prodi], 201);
    }

    public function update(Request $request, $id): JsonResponse {
        $prodi = DimProdi::find($id);
        if (!$prodi) return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        $validated = $request->validate([
            'jenjang'    => 'sometimes|string|max:10',
            'nama_prodi' => 'sometimes|string|max:100',
        ]);
        $prodi->update($validated);
        return response()->json(['status' => 'success', 'message' => 'Data berhasil diperbarui', 'data' => $prodi], 200);
    }

    public function destroy($id): JsonResponse {
        $prodi = DimProdi::find($id);
        if (!$prodi) return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        $prodi->delete();
        return response()->json(['status' => 'success', 'message' => 'Data ID ' . $id . ' berhasil dihapus'], 200);
    }
}