<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;


use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function index () 
    {
        return Mahasiswa::paginate(10);
    }

    function tambah (Request $request) 
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->nim  = $request->input('nim');
        $mahasiswa->ttl  = $request->input('tanggalLahir');
        $mahasiswa->jurusan = $request->input('jurusan');
        $mahasiswa->semester = $request->input('semester');
        $mahasiswa->save();
        return $mahasiswa;
    }

    function delete($id) 
    {
        $result = Mahasiswa::where('id', $id)->delete();
        if ($result) {
            return ["pesan" => "menghapus sukses"];
        } else {
            return ["pesan" => "gagal menghapus"];
        }
    }

    function get($id) {
        $result = Mahasiswa::find($id);
        return $result;
    }

    function put ($id, Request $request)
    {
        // return $request->input();
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->nim  = $request->input('nim');
        $mahasiswa->ttl  = $request->input('tanggalLahir');
        $mahasiswa->jurusan = $request->input('jurusan');
        $mahasiswa->semester = $request->input('semester');
        $mahasiswa->save();
        return $request->input();
    }

    function search ($key) {
        $mahasiswa = Mahasiswa::where("nama", "like", "%$key%")->paginate(10);
        return $mahasiswa;
    }
}
