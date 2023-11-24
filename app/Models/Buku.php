<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rak;
use App\Models\Anggota;
use App\Models\Petugas;



class Buku extends Model
{
    use HasFactory;

    protected $table = "buku";
    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'penulis_buku',
        'penerbit_buku',
        'tahun_penerbit',
        'stok_buku',
        'rak_id'
    ];


    public function rak()
    {
        return $this->hasMany(Rak::class, 'id', 'rak_id');
    }
}