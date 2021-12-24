<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert([
            'judul_berita'=> 'Peternakan Sapi Modern',
            'gambar'=> 'ternaksapi.png',
            'isi_berita'=> 'Usaha peternakan juga cukup menjanjikan apabila pengusaha dapat memanfaatkan usaha peternakan tersebut dengan baik dan memperoleh keuntungan yang besar. Agar mengetahui lebih lanjut, artikel satu ini akan menjelaskan mengenai usaha peternakan, mulai dari pengertian, jenis hingga ciri-cirinya.',

        ]);

        DB::table('beritas')->insert([
            'judul_berita'=> 'Peraturan Baru Mengenai Peternakan, Peraturan Menteri Pertanian Nomor 14 Tahun 2020',
            'gambar'=> 'peraturanbaru.png',
            'isi_berita'=> 'Menimbang:
            a. bahwa dengan perkembangan kegiatan berusaha sektor peternakan di masyarakat, serta untuk meningkatkan kemudahan dan percepatan pelayanan perizinan berusaha di bidang peternakan, Keputusan Menteri Pertanian Nomor 404/Kpts/OT.210/6/2002 tentang Pedoman Perizinan dan Pendaftaran Usaha Peternakan perlu diganti;
            b. bahwa berdasarkan pertimbangan sebagaimana dimaksud dalam huruf a dan untuk melaksanakan ketentuan Pasal 44 ayat (2) Peraturan Pemerintah Nomor 48 Tahun 2011 tentang Sumber Daya Genetik Hewan dan Perbibitan Ternak, Pasal 15 dan Pasal 25 ayat (5) Peraturan Presiden Nomor 48 Tahun 2013 tentang Budi Daya Hewan Peliharaan, perlu menetapkan Peraturan Menteri Pertanian tentang Pendaftaran dan Perizinan Usaha Peternakan;',

        ]);

        DB::table('beritas')->insert([
            'judul_berita'=> 'Peternakan Sapi Tradisional Perlu Bantuan',
            'gambar'=> 'ternaksapi2.png',
            'isi_berita'=> 'Usaha peternakan cukup menjanjikan apabila pengusaha dapat memanfaatkan usaha peternakan tersebut dengan baik dan memperoleh keuntungan yang besar. Agar mengetahui lebih lanjut, artikel satu ini akan menjelaskan mengenai usaha peternakan, mulai dari pengertian, jenis hingga ciri-cirinya.',

        ]);
    }
}
