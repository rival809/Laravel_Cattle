<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'nama'=> 'Daging Sapi',
            'gambar'=> 'dagingsapi.png',
        ]);

        DB::table('kategoris')->insert([
            'nama'=> 'Daging Kambing',
            'gambar'=> 'dagingkambing.png',
        ]);

        DB::table('kategoris')->insert([
            'nama'=> 'Daging Ayam',
            'gambar'=> 'dagingayam.png',
        ]);

        DB::table('kategoris')->insert([
            'nama'=> 'Telur Ayam',
            'gambar'=> 'telurayam.png',
        ]);

        DB::table('kategoris')->insert([
            'nama'=> 'Telur Bebek',
            'gambar'=> 'telurbebek.png',
        ]);

        DB::table('kategoris')->insert([
            'nama'=> 'Susu Sapi',
            'gambar'=> 'sususapi.png',
        ]);
    }
}
