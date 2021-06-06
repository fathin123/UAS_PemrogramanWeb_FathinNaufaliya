<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'foto' => '1.jpg',
            'nama' => 'Camille Beaute',
            'harga' => '25.000',
            'stok' => '20pcs',
            'deskripsi' => 'Masker Camille Beauty BPOM
            Baca Ketentuan :
            Netto: 25gr & 65gr
            25gr = 10-12x pemakaian
            65gr = 24-25x pemakaian',
        ]);

        DB::table('products')->insert([
            'foto' => '2.jpg',
            'nama' => 'Beautetox',
            'harga' => '15.000',
            'stok' => '24pcs',
            'deskripsi' => 'Masker Inspired by Indonesian Heritages BPOM
            Baca Ketentuan :
            Netto: 20gr
            20gr = 8-10x pemakaian',
        ]);

        DB::table('products')->insert([
            'foto' => '3.jpg',
            'nama' => 'Runaskin',
            'harga' => '15.000',
            'stok' => '12pcs',
            'deskripsi' => 'Milky Series BPOM
            Baca Ketentuan :
            Netto: 25gr
            10-12x pemakaian',
        ]);
    }
}
