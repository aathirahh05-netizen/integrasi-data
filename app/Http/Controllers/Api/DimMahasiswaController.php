<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DimMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DimMahasiswaController extends Controller
{
    // GET /api/dim-mahasiswa
    public function index(): JsonResponse
    {
        $data = DimMahasiswa::with('prodi')->get();
        return response()->json([
            'status'  => 'success',
            'message' => 'Data mahasiswa berhasil diambil',
            'total'   => $data->count(),
            'data'    => $data,
        ], 200);
    }

    // GET /api/dim-mahasiswa/{id}
    public function show($id): JsonResponse
    {
        $mahasiswa = DimMahasiswa::with('prodi')->find($id);
        if (!$mahasiswa) {
            return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json(['status' => 'success', 'data' => $mahasiswa], 200);
    }

    // POST /api/dim-mahasiswa
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'id_prodi'    => 'required|integer|exists:dim_prodi,id',
            'nama'        => 'required|string|max:100',
            'nim'         => 'required|string|max:20|unique:dim_mahasiswa,nim',
            'nomor_induk' => 'nullable|string|max:20',
        ]);
        $mahasiswa = DimMahasiswa::create($validated);
        return response()->json(['status' => 'success', 'message' => 'Data berhasil ditambahkan', 'data' => $mahasiswa], 201);
    }

    // PUT /api/dim-mahasiswa/{id}
    public function update(Request $request, $id): JsonResponse
    {
        $mahasiswa = DimMahasiswa::find($id);
        if (!$mahasiswa) {
            return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        }
        $validated = $request->validate([
            'id_prodi'    => 'sometimes|integer|exists:dim_prodi,id',
            'nama'        => 'sometimes|string|max:100',
            'nim'         => 'sometimes|string|max:20|unique:dim_mahasiswa,nim,' . $id,
            'nomor_induk' => 'sometimes|nullable|string|max:20',
        ]);
        $mahasiswa->update($validated);
        return response()->json(['status' => 'success', 'message' => 'Data berhasil diperbarui', 'data' => $mahasiswa->fresh('prodi')], 200);
    }

    // DELETE /api/dim-mahasiswa/{id}
    public function destroy($id): JsonResponse
    {
        $mahasiswa = DimMahasiswa::find($id);
        if (!$mahasiswa) {
            return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        }
        $mahasiswa->delete();
        return response()->json(['status' => 'success', 'message' => 'Data ID ' . $id . ' berhasil dihapus'], 200);
    }
}