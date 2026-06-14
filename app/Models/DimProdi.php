<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DimProdi extends Model
{
    protected $table    = 'dim_prodi';
    public $timestamps  = false;
    protected $fillable = ['jenjang', 'nama_prodi'];
}