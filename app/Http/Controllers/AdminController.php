<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data1['user'] = DB::table('users')->orderBy('id', 'asc')->get();

        return view('layoutadmin.index', $data1);
    }
    public function datatraining()
    {
        $data['user'] = DB::table('data_training')->orderBy('nim', 'asc')->get(); //untuk mengambil semua data ditabel user

        return view('layoutadmin.datatraining', $data);
    }
    public function datatesting()
    {
        $data['user'] = DB::table('data_testing')->orderBy('nim', 'asc')->get(); //untuk mengambil semua data ditabel user

        return view('layoutadmin.datatesting', $data);
    }
    public function edittraining($nim)
    {
        $data2['user'] = DB::table('data_training')->where('nim', $nim)->first();

        return view('layoutadmin.edittraining', $data2);
    }

    public function updatetraining(Request $request, $nim)
    {
        $simpan = DB::table('user')->where('nim', $nim)->update(
            [
                'nim' => $request->nim,
                'nama' => $request->nama,
                'jurusan_sekolah' => $request->jurusan_sekolah,
                'prodi' => $request->prodi,
                'ipk' => $request->ipk,
                'ekonomi' => $request->ekonomi
            ]
        );
    }
}
