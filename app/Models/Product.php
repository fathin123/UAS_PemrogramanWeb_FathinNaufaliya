<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactroy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table="products"; // Eloquent akan membuat model mahasiswamenyimpan record di tabel mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'id',
        'foto',
        'nama',
        'stok',
        'harga',
        'deskripsi',
    ];
}
