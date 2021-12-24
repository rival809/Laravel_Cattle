<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EdukasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edukasis')->insert([
            'judul_edu'=> '4 Jenis Vitamin yang Paling Dibutuhkan oleh Sapi',
            'gambar'=> 'vitsapi.png',
            'isi_edu'=> 'Pertumbuhan sapi ternak membutuhkan asupan dengan nutrisi yang cukup,  salah satunya vitamin. Walaupun dibutuhkan dalam jumlah sedikit, vitamin  sangat penting karena memengaruhi kualitas dan produktivitasnya.  Setidaknya, ada 4 jenis vitamin yang dibutuhkan oleh sapi.

            Jenis vitamin secara umum ada dua, yakni larut dalam air dan larut  dalam lemak. Vitamin B dan C yang larut dalam air dapat disintesa oleh  mikroorganisme dalam rumen sapi. Di awal masa pertumbuhan, vitamin B  yang dibutuhkan oleh anakan sapi diperoleh dari susu induknya. Sementara  itu, vitamin larut lemak didapatkan sapi dari pakan.',

        ]);

        DB::table('edukasis')->insert([
            'judul_edu'=> 'Penyakit Umum Kambing dan Proses Pengobatannya',
            'gambar'=> 'penyakitkambing.png',
            'isi_edu'=> ' Dalam beternak kambing, ada beberapa penyakit yang sering menyerang kambing. Serangannya bisa ringan, tapi bisa juga menyebabkan kematian jika tidak segera diantisipasi.  Maka kita akan bahas beberapa jenis penyakit yang sering menyerang kambing, sehingga dapat diambil tindakan nyata dalam penanganannya, diantaranya:
            1. Kembung
            Kembung atau juga disebut bloat adalah kondisi perut kambing berisi banyak gas yang diakibatkan proses fermentasi yang berjalan cepat dan tidak dapat mengeluarkannya dalam bentuk kentut. Akibat tingginya akumulasi gas dalam perut dapat menekan organ dalam tubuh yang lain dan menimbulkan kesakitan. Sehingga kambing pun melakukan pernapasan dengan mulut terbuka akibat frekuensi pernapasan yang tinggi.
            2. Cacingan
            Jenis cacing yang bisa menyerang kambing, diantaranya: haemonchus cocortus, Trichuris sp dan Oestophagostomum sp yang kemungkinan besar terdapat pada pakan. Cacing itu akan hidup sebagai parasit di saluran pencernaan, melekat di selaput usus dan menghisap sari makanan, cairan tubuh, darah serta mengeluarkan racun. Kondisi ini menyebabkan kambing menjadi lemah, lesu dan tidak bisa gemuk walaupun diberi makan banyak. Dalam beberapa kasus, kambing muda usia 3–4 bulan yang terkena cacingan bisa kurus dan mati.
            3. Scabies
            Scabies (kudis dan kurap), penyebabnya adalah ektoparasit atau tungau Sarcoptes scabei, Psoroptes communis varovis dan Chorioptes ovis. Biasanya penyakit ini akan menyerang area disekitar telinga dulu, kemudian baru menyebar. 
            4. Orf (seperti sariwan)
            Sering disebut juga dakangan atau Ecthyma Contagiosa, disebabkan oleh virus Parapoxvyrus yang bersifat zoonosis dan dapat menular ke manusia. Biasanya kambing terkena orf saat memakan rumput yang berbulu dan debu dari konsentrat. Gejala klinisnya adalah: luka disekitar mulut yang berupa keropeng hitam dan terdapat juga benjolan. Lama–lama bisa menyebar ke sela–sela kuku, akibatnya kambing menjadi kurus karena tidak selera makan. Biasanya orf atau keropeng mulut ini bisa sembuh setelah 1 bulan, tapi dalam kasus tertentu juga bisa menimbulkan kematian jika terjadi infeksi sekunder.',

        ]);

        DB::table('edukasis')->insert([
            'judul_edu'=> 'Peneliti IPB Atasi Stres Ayam Broiler dengan Kombinasi Vitamin dan Mineral',
            'gambar'=> 'vitayam.png',
            'isi_edu'=> 'Ayam broiler merupakan jenis ras unggulan yang dihasilkan dari persilangan bangsa-bangsa yang memiliki produktivitas tinggi. Ayam broiler memiliki karakteristik ekonomi dan pertumbuhan
            yang cepat sebagai penghasil daging, konversi ransum rendah, dapat dipotong pada umur muda, dan menghasilkan kualitas daging yang berserat lunak. Kesejahteraan broiler dipengaruhi oleh beberapa faktor internal dan eksternal seperti manajemen pemeliharaan, stres, gizi, kepadatan kandang, ventilasi, intensitas cahaya, dan penyebaran penyakit. Kepadatan kandang juga dapat mempengaruhi kualitas karkas dan konsumsi pakan.
            Stres berupa panas menyebabkan ayam rentan terserang infeksi penyakit yang berasal dari bakteri seperti Escherichia coli dan virus seperti Newcastle disease (ND), yang memberikan pengaruh negatif terhadap produktivitas dan kesehatan yang dapat menimbulkan kematian dan kerugian ekonomis. Upaya mengatasi cekaman panas itu salah satunya adalah dengan penambahan  mineral zinc (Zn) dan vitamin E.',

        ]);
    }
}
