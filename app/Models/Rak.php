<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rak;

class Rak extends Model
{
    use HasFactory;

    protected $table = 'raks';
    protected $fillable = [
        'nama_rak',
        'lokasi_rak'
    ];

    public function buku()
    {
        return $this->belongsTo('Buku::class', 'id_buku', 'id');
    }
}
