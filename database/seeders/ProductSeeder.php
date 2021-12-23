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
            'nama'=> 'Daging Sapi Sirloin',
            'harga'=> '120000',
            'berat'=> '1',
            'kategori_id'=> '1',
            'gambar'=> 'dagingsapisirloin.png',
            'deskripsi'=>'Daging sapi sirloin terbaik, berasal dari sapi sehat peternak lokal yang berada di daerah Jawa Barat'
        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Sapi Tenderloin',
            'harga'=> '110000',
            'berat'=> '1',
            'kategori_id'=> '1',
            'gambar'=> 'dagingsapitenderloin.png',
            'deskripsi'=>'Daging sapi tenderloin terbaik, berasal dari sapi sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Sapi Cincang',
            'harga'=> '100000',
            'berat'=> '1',
            'kategori_id'=> '1',
            'gambar'=> 'dagingsapicincang.png',
            'deskripsi'=>'Daging sapi cincang terbaik, berasal dari sapi sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Kambing Cincang',
            'harga'=> '120000',
            'berat'=> '1',
            'kategori_id'=> '2',
            'gambar'=> 'dagingkambingcincang.png',
            'deskripsi'=>'Daging kambing cincang terbaik, berasal dari kambing sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Kambing Iga',
            'harga'=> '120000',
            'berat'=> '1',
            'kategori_id'=> '2',
            'gambar'=> 'dagingkambingiga.png',
            'deskripsi'=>'Daging kambing iga terbaik, berasal dari kambing sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Ayam Cincang',
            'harga'=> '25000',            
            'berat'=> '1',
            'kategori_id'=> '3',
            'gambar'=> 'dagingayamcincang.png',
            'deskripsi'=>'Daging ayam cincang terbaik, berasal dari ayam sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Ayam Paha',
            'harga'=> '25000',
            'berat'=> '1',
            'kategori_id'=> '3',
            'gambar'=> 'dagingayampaha.png',
            'deskripsi'=>'Daging ayam paha terbaik, berasal dari ayam sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Ayam Dada',
            'harga'=> '30000',
            'berat'=> '1',
            'kategori_id'=> '3',
            'gambar'=> 'dagingayamdada.png',
            'deskripsi'=>'Daging ayam dada terbaik, berasal dari ayam sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Telur Ayam Kampung',
            'harga'=> '20000',
            'berat'=> '1',
            'kategori_id'=> '4',
            'gambar'=> 'telurayamkampung.png',
            'deskripsi'=>'Telur ayam kampung terbaik, berasal dari ayam sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Telur Ayam Negeri',
            'harga'=> '22000',
            'berat'=> '1',
            'kategori_id'=> '4',
            'gambar'=> 'telurayamnegeri.png',
            'deskripsi'=>'Telur ayam negeri terbaik, berasal dari ayam sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Telur bebek',
            'harga'=> '25000',
            'berat'=> '1',
            'kategori_id'=> '5',
            'gambar'=> 'telurbebek.png',
            'deskripsi'=>'Telur bebek  terbaik, berasal dari bebek sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Telur asin',
            'harga'=> '40000',
            'berat'=> '1',
            'kategori_id'=> '5',
            'gambar'=> 'telurasin.png',
            'deskripsi'=>'Telur asin terbaik, berasal dari bebek sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Whole Milk',
            'harga'=> '25000',
            'berat'=> '1',
            'kategori_id'=> '6',
            'gambar'=> 'wholemilk.png',
            'deskripsi'=>'Susu murni terbaik, berasal dari sapi sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);

        DB::table('products')->insert([
            'nama'=> 'Low-fat Milk',
            'harga'=> '30000',
            'berat'=> '1',
            'kategori_id'=> '6',
            'gambar'=> 'lowfatmilk.png',
            'deskripsi'=>'Susu lowfat terbaik, berasal dari sapi sehat peternak lokal yang berada di daerah Jawa Barat'

        ]);
    }
}
