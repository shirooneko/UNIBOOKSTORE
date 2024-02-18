<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $fillable = ['id_penebit', 'kategori', 'nama_buku','harga','stok','penerbit'];

    public function getAllBuku()
    {
        return $this->all();
    }
}
