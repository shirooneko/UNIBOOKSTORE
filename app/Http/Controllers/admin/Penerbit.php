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
            'dataPenerbit' => PenerbitModel::all()
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
            'id_penerbit' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'telepon' => 'required',
        ]);

        $penerbit = new PenerbitModel();
        $penerbit->id_penerbit = $validatedData['id_penerbit'];
        $penerbit->nama = $validatedData['nama'];
        $penerbit->alamat = $validatedData['alamat'];
        $penerbit->kota = $validatedData['kota'];
        $penerbit->telepon = $validatedData['telepon'];

        $penerbit->save();

        return redirect('/admin/penerbit')->with('success', 'Penerbit berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [
            'page_title' => 'Penerbit',
            'dataPenerbit' => PenerbitModel::findOrFail($id)

        ];

        return view('/admin/penerbit/penerbit-edit', $data);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'id_penerbit' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'telepon' => 'required',
        ]);

        $penerbit = PenerbitModel::findOrFail($validatedData['id']);

        $penerbit->id_penerbit = $validatedData['id_penerbit'];
        $penerbit->nama = $validatedData['nama'];
        $penerbit->alamat = $validatedData['alamat'];
        $penerbit->kota = $validatedData['kota'];
        $penerbit->telepon = $validatedData['telepon'];

        $penerbit->update();

        return redirect('/admin/penerbit')->with('success', 'Data penerbit berhasil diperbarui.');
    }

    public function delete($id)
    {
        $penerbit = PenerbitModel::findOrFail($id);

        $penerbit->delete();

        return redirect('/admin/penerbit')->with('success', 'Data penerbit berhasil dihapus.');
    }



}
