<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DimSurat extends Model
{
    protected $table    = 'dim_surat';
    public $timestamps  = false;
    protected $fillable = ['jenis_sk', 'keterangan_sk', 'nomor_sk', 'tanggal_sk'];
}