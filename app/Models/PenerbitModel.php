<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerbitModel extends Model
{
    protected $table = 'penerbit';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id_penerbit', 'nama', 'alamat','kota','telepon'];

    public function getAllData()
    {
        return $this->all();
    }
}
