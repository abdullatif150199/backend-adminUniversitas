<?php

namespace App\Http\Controllers;
use App\Models\Dosen;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    function index () 
    {
        return Dosen::latest()->paginate(10);
    }

    function tambah (Request $request) 
    {
        $dosen = new Dosen;
        $dosen->nama = $request->input('nama');
        $dosen->nidn  = $request->input('nidn');
        $dosen->alamat  = $request->input('alamat');
        $dosen->mk = $request->input('mk');
        $dosen->jam = $request->input('jam');
        $dosen->save();
        return $dosen;
    }

    function delete($id) 
    {
        $result = Dosen::where('id', $id)->delete();
        return $result;
    }

    function get($id) {
        $result = Dosen::find($id);
        return $result;
    }

    function put ($id, Request $request)
    {
        // return $request->input();
        $dosen = Dosen::find($id);
        $dosen->nama = $request->input('nama');
        $dosen->nidn  = $request->input('nidn');
        $dosen->alamat  = $request->input('alamat');
        $dosen->mk = $request->input('mk');
        $dosen->jam = $request->input('jam');
        $dosen->save();
        return $request->input();
    }

    function search ($key) {
        $dosen = Dosen::where("nama", "like", "%$key%")->paginate(10);
        return $dosen;
    }
}
