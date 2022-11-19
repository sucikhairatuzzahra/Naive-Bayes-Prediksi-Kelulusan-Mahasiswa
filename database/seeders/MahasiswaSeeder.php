<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nim' => '1911081025',
            'nama' => 'Suci Khairatuz Zahra',
            'jurusan_sekolah' => 'ipa',
            'prodi' => 'trpl',
            'ipk' => '3.73',
            'ekonomi' => 'menengah',
            'keterangan' => 'lulus_tepat_waktu'
        ]);
    }
}
