<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DimSurat;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DimSuratController extends Controller
{
    public function index(): JsonResponse {
        $data = DimSurat::all();
        return response()->json(['status' => 'success', 'total' => $data->count(), 'data' => $data], 200);
    }

    public function show($id): JsonResponse {
        $surat = DimSurat::find($id);
        if (!$surat) return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        return response()->json(['status' => 'success', 'data' => $surat], 200);
    }

    public function store(Request $request): JsonResponse {
        $validated = $request->validate([
            'jenis_sk'      => 'required|string|max:50',
            'keterangan_sk' => 'nullable|string',
            'nomor_sk'      => 'nullable|string|max:50',
            'tanggal_sk'    => 'nullable|date',
        ]);
        $surat = DimSurat::create($validated);
        return response()->json(['status' => 'success', 'message' => 'Data berhasil ditambahkan', 'data' => $surat], 201);
    }

    public function update(Request $request, $id): JsonResponse {
        $surat = DimSurat::find($id);
        if (!$surat) return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        $validated = $request->validate([
            'jenis_sk'      => 'sometimes|string|max:50',
            'keterangan_sk' => 'sometimes|nullable|string',
            'nomor_sk'      => 'sometimes|nullable|string|max:50',
            'tanggal_sk'    => 'sometimes|nullable|date',
        ]);
        $surat->update($validated);
        return response()->json(['status' => 'success', 'message' => 'Data berhasil diperbarui', 'data' => $surat], 200);
    }

    public function destroy($id): JsonResponse {
        $surat = DimSurat::find($id);
        if (!$surat) return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        $surat->delete();
        return response()->json(['status' => 'success', 'message' => 'Data ID ' . $id . ' berhasil dihapus'], 200);
    }
}