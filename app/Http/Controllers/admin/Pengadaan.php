<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuModel;

class Pengadaan extends Controller
{
    protected $buku;

    public function __construct()
    {
        $this->buku = new BukuModel();
    }

    public function index()
    {

        $data = [
            'page_title' => 'Pengadaan',
            'dataBuku' => $this->buku->getAllBukuJoinStok()
        ];

        return view('/admin/pengadaan/pengadaan-list', $data);
    }

    public function updateStok($id)
    {
        $data = [
            'page_title' => 'Penerbit',
            'dataBuku' => BukuModel::findOrFail($id)
        ];

        return view('/admin/pengadaan/pengadaan-updateStok', $data);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'stok' => 'required|numeric',
        ]);

        $buku = BukuModel::findOrFail($validatedData['id']);

        $buku->stok = $validatedData['stok'];

        $buku->update();

        return redirect('/admin/pengadaan')->with('success', 'Data buku berhasil di restok.');
    }
}
