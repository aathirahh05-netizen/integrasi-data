<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DimMahasiswa extends Model
{
    protected $table    = 'dim_mahasiswa';
    public $timestamps  = false;   // hapus jika tabel punya created_at/updated_at
    protected $fillable = ['id_prodi', 'nama', 'nim', 'nomor_induk'];

    public function prodi() {
        return $this->belongsTo(DimProdi::class, 'id_prodi', 'id');
    }
}