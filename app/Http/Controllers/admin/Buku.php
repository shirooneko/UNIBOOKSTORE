<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuModel;
use App\Models\PenerbitModel;

class Buku extends Controller
{
    protected $buku;

    public function __construct()
    {
        $this->buku = new BukuModel();
    }

    public function index()
    {

        $data = [
            'page_title' => 'List Buku',
            'dataBuku' => $this->buku->getAllBukuJoin()
        ];

        return view('/admin/buku/buku-list', $data);
    }

    public function add()
    {
        $data = [
            'page_title' => 'List Buku',
            'dataPenerbit' => PenerbitModel::all(),
        ];

        return view('/admin/buku/buku-add', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_buku' => 'required',
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'penerbit_id' => 'required',
        ]);

        $buku = new BukuModel();
        $buku->id_buku = $validatedData['id_buku'];
        $buku->kategori = $validatedData['kategori'];
        $buku->nama_buku = $validatedData['nama_buku'];
        $buku->harga = $validatedData['harga'];
        $buku->stok = $validatedData['stok'];
        $buku->penerbit_id = $validatedData['penerbit_id'];

        $buku->save();

        return redirect('/admin/buku')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [
            'page_title' => 'List Buku',
            'dataPenerbit' => PenerbitModel::all(),
            'dataBuku' => BukuModel::findOrFail($id)
        ];

        return view('/admin/buku/buku-edit', $data);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'id_buku' => 'required',
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'penerbit_id' => 'required',
        ]);

        $buku = BukuModel::findOrFail($validatedData['id']);

        $buku->id_buku = $validatedData['id_buku'];
        $buku->kategori = $validatedData['kategori'];
        $buku->nama_buku = $validatedData['nama_buku'];
        $buku->harga = $validatedData['harga'];
        $buku->stok = $validatedData['stok'];
        $buku->penerbit_id = $validatedData['penerbit_id'];

        $buku->save();

        return redirect('/admin/buku')->with('success', 'Data buku berhasil diperbarui.');
    }

    public function delete($id)
    {
        $penerbit = BukuModel::findOrFail($id);

        $penerbit->delete();

        return redirect('/admin/buku')->with('success', 'Data penerbit berhasil dihapus.');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('searchBuku');

        $dataBuku = BukuModel::join('penerbit', 'buku.penerbit_id', '=', 'penerbit.id')
            ->select('buku.*', 'penerbit.nama as nama_penerbit')
            ->where('buku.nama_buku', 'like', '%' . $searchTerm . '%')
            ->get();

        return response()->json($dataBuku);
    }

}
