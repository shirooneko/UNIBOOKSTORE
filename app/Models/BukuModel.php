<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['id_penebit', 'kategori', 'nama_buku', 'harga', 'stok', 'penerbit_id'];

    public function getAllBuku()
    {
        return $this->all();
    }

    public function getAllBukuJoin()
    {
        return $this->join('penerbit', 'buku.penerbit_id', '=', 'penerbit.id')
            ->select('buku.*', 'penerbit.nama as nama_penerbit')
            ->get();
    }

    public function getAllBukuJoinStok()
    {
        return $this->join('penerbit', 'buku.penerbit_id', '=', 'penerbit.id')
            ->select('buku.*', 'penerbit.nama as nama_penerbit')
            ->orderBy('stok', 'asc')
            ->get();
    }

    public static function searchByNamaBuku($searchTerm)
    {
        return static::with('penerbit')
            ->where('nama_buku', 'like', '%' . $searchTerm . '%')
            ->get();
    }

}
