<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DimJenisOrg extends Model
{
    protected $table    = 'dim_jenis_org';
    public $timestamps  = false;
    protected $fillable = ['jenis_organisasi', 'nama_organisasi'];
}