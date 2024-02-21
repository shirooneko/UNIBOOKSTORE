<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class Home extends Controller
{
    protected $buku;

    public function __construct()
    {
        $this->buku = new BukuModel();
    }

    public function index()
    {
        $data = [
            'dataBuku' => $this->buku->getAllBukuJoin(),
        ];
        return view('home', $data);
    }
}
