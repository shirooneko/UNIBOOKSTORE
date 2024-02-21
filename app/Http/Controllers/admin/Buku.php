<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuModel;

class Buku extends Controller
{
    protected $buku;

    public function __construct()
    {
        $this->buku = new BukuModel();
    }

    public function index(){

        $data = [
            'page_title' => 'List Buku',
            'dataBuku' => $this->buku->getAllBukuJoin() 
        ];

        return view('/admin/buku/buku-list', $data);
    }

    public function add(){
        $data = [
            'page_title' => 'List Buku'
        ];

        return view('/admin/buku/buku-add', $data);
    }
}
