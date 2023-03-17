<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Pegawai;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index () {
        $jumlahMahasiswa = Mahasiswa::count();
        $jumlahDosen = Dosen::count();
        $jumlahPegawai = Pegawai::count();
        $data = [
            'mahasiswa' => $jumlahMahasiswa,
            'dosen' => $jumlahDosen,
            'pegawai' => $jumlahPegawai
        ];
        return $data;
    }
}
