<?php

namespace App\Http\Controllers;
use App\Models\pegawai;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    function index () 
    {
        return Pegawai::latest()->paginate(10);
    }

    function tambah (Request $request) 
    {
        $pegawai = new Pegawai;
        $pegawai->nama = $request->input('nama');
        $pegawai->nohp  = $request->input('nohp');
        $pegawai->alamat  = $request->input('alamat');
        $pegawai->posisi = $request->input('posisi');
        $pegawai->jam = $request->input('jam');
        $pegawai->save();
        return $pegawai;
    }

    function delete($id) 
    {
        $result = Pegawai::where('id', $id)->delete();
        return $result;
    }

    function get($id) {
        $result = Pegawai::find($id);
        return $result;
    }

    function put ($id, Request $request)
    {
        // return $request->input();
        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->input('nama');
        $pegawai->nohp  = $request->input('nohp');
        $pegawai->alamat  = $request->input('alamat');
        $pegawai->posisi = $request->input('posisi');
        $pegawai->jam = $request->input('jam');
        $pegawai->save();
        return $request->input();
    }

    function search ($key) {
        $pegawai = Pegawai::where("nama", "like", "%$key%")->paginate(10);
        return $pegawai;
    }
}
