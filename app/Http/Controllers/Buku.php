<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

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
            'dataBuku' => $this->buku->getAllBuku(),
        ];
        return view('/admin/buku', $data);
    }
}
