<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenerbitModel;

class Penerbit extends Controller
{
    protected $penerbit;

    public function __construct()
    {
        $this->penerbit = new PenerbitModel();
    }

    public function index()
    {
        $data = [
            'page_title' => 'Penerbit',
            'dataPenerbit' => $this->penerbit->getAllData()
        ];

        return view('/admin/penerbit/penerbit-list', $data);
    }

    public function add()
    {
        $data = [
            'page_title' => 'Penerbit'
        ];

        return view('/admin/penerbit/penerbit-add', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_penerbit' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
        ]);

        $penerbit = new PenerbitModel();
        $penerbit->id_penerbit = $validatedData['id_penerbit'];
        $penerbit->nama = $validatedData['nama'];
        $penerbit->alamat = $validatedData['alamat'];
        $penerbit->kota = $validatedData['kota'];
        $penerbit->telepon = $validatedData['telepon'];

        $penerbit->save();

        return redirect()->route('penerbit.index')->with('success', 'Penerbit berhasil ditambahkan.');
    }

}
