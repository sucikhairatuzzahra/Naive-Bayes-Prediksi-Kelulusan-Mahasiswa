<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function beranda()
    {
        return view('layoutuser.index');
    }
    public function userinput()
    {
        return view('layoutuser.user');
    }
    public function useraksi(Request $request)
    {
        // dd($request);

        $input = DB::table('data_testing')->insert(
            [
                'nim' => $request->nim,
                'nama' => $request->nama,
                'ipk' => $request->ipk,
                'jurusan_sekolah' => $request->jurusan_sekolah,
                'prodi' => $request->prodi,
                'ekonomi' => $request->ekonomi

            ]
        );
        session(['nim' => $request->nim]);
        if ($input == true) {
            echo "<script>
            alert('Data berhasil diinput! cek hasil!');
            window.location = 'klasifikasi';
            </script>";
        } else {
            echo "<script>
            alert('Data gagal diinput, masukkan kebali data dengan benar');
            window.location = '/tambah';
            </script>";
        }
    }
    public function klasifikasi()
    {

        $data = DB::table('data_testing')->where(['nim' => session()->get('nim')])->first();

        $input = [
            "jurusan_sekolah" => $data->jurusan_sekolah,
            "prodi" => $data->prodi,
            "ipk" => $this->clasifyIPK($data->ipk),
            "ekonomi" => $data->ekonomi,
        ];

        $table_data_train = "data_training";

        $kriteria = [
            "jurusan_sekolah",
            "prodi",
            "ipk",
            "ekonomi"
        ];

        $hasil = "keterangan";
        $hasil_value = ["lulus_terlambat", "lulus_tepat_waktu"];

        $select = implode(',', [...$kriteria, $hasil]);
        //$data_train = $db->query("SELECT $select FROM $table_data_train");
        $data_train = DB::table($table_data_train)->selectRaw($select)->get();

        $data_train_normal = [];
        foreach ($data_train as $key => $value) {
            $value->ipk =  $this->clasifyIPK($value->ipk);
            $data_train_normal[] = $value;
        }

        $prob_true = [];
        $prob_false = [];
        foreach ($kriteria as $key => $value) {
            $prob_true[] = $this->getProbabilities($data_train_normal, [
                $value => $input[$value],
                $hasil => $hasil_value[1]
            ]) / count($data_train_normal);

            $prob_false[] = $this->getProbabilities($data_train_normal, [
                $value => $input[$value],
                $hasil => $hasil_value[0]
            ]) / count($data_train_normal);
        }

        $prob_hasil_true = $this->getProbabilities($data_train_normal, [
            $hasil => $hasil_value[1]
        ]) / count($data_train_normal);

        $prob_hasil_false = $this->getProbabilities($data_train_normal, [
            $hasil => $hasil_value[0]
        ]) / count($data_train_normal);

        $hasil = [
            number_format(array_product($prob_true) * $prob_hasil_true, 10),
            number_format(array_product($prob_false) * $prob_hasil_false, 10)
        ];



        return view('layoutuser.klasifikasi', compact('hasil'));
    }
    private function clasifyIPK($value)
    {
        if ($value > 3.5) return "A";
        if ($value > 3) return "B";
        if ($value > 2.5) return "C";
        if ($value > 2) return "D";
        return "E";
    }

    private function getProbabilities($data, $rules)
    {
        $hasil = 0;
        foreach ($data as $x => $v) {
            $iya = 0;
            foreach ($rules as $y => $value) {
                if ($v->$y == $value) $iya += 1;
                else $iya -= 1;
            }
            $hasil += ($iya == count($rules)) ? 1 : 0;
        }
        return $hasil;
    }

    //NAIVE
    // public function totalDataTraining()
    // {
    //     $count = DB::table('data_training')->count();
    //     return view('layoutuser.user', $count);
    // }

    // public function jumlahDataKelas($keterangan)
    // {
    //     $count = DB::table('data_training')->where('keterangan', $keterangan)->count();
    //     global $con;
    //     $query = "SELECT COUNT * FROM data_training WHERE keterangan= ";
    //     $jmlKeterangan['lulus_tepat_waktu'] = (int) mysqli_fetch_row(mysqli_query($con, $query . "'lulus_tepat_waktu"))[0];
    //     return view('layoutuser.user', $count);
    // }

    // public function priorProbability($keterangan, $kelas)
    // {
    //     $query = "SELECT COUNT * FROM data_training WHERE keterangan= ";
    //     $kelas['lulus_tepat_waktu'] = jumlahDataKelas()['lulus_tepat_waktu'] / totalDataTraining();
    //     $kelas['lulus_terlambat'] = jumlahDataKelas()['lulus_terlambat'] / totalDataTraining();
    //     return view('layoutuser.user', $kelas);
    // }

    // public function conditionalProbability($kolom, $nilai)
    // {
    //     $data = DB::table('data_training')->selectcount($kolom)->where($kolom = $nilai)->AND('keterangan', "=")->get();
    //     $conditional['lulus_tepat_waktu'] = (int) mysqli_fetch_row($data . "lulus_tepat_waktu")[0] / jumlahDataKelas()['lulus_tepat_waktu'];
    //     $conditional['lulus_terlambat'] = (int) mysqli_fetch_row($data . "lulus_terl ambat")[0] / jumlahDataKelas()['lulus_terlambat'];

    //     return view('layoutuser.user', $conditional);
    // }
}
