<?php

namespace App\Http\Controllers;
use App\Models\Nilai;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    function index () 
    {
        return Nilai::latest()->paginate(10);
    }

    function tambah (Request $request) 
    {
        $nilai = new Nilai;
        $nilai->nama = $request->input('nama');
        $nilai->codemk  = $request->input('codemk');
        $nilai->mk = $request->input('mk');
        $nilai->nilai = $request->input('point');
        $nilai->save();
        return $nilai;
    }

    function delete($id) 
    {
        $result = Nilai::where('id', $id)->delete();
        return $result;
        
    }

    function get($id) {
        $result = Nilai::find($id);
        return $result;
    }

    function put ($id, Request $request)
    {
        // return $request->input();
        $nilai = Nilai::find($id);
        $nilai->nama = $request->input('nama');
        $nilai->codemk = $request->input('codemk');
        $nilai->mk = $request->input('mk');
        $nilai->nilai = $request->input('point');
        $nilai->save();
        return $request->input();
    }

    function search ($key) {
        $nilai = Nilai::where("nama", "like", "%$key%")->paginate(10);
        return $nilai;
    }
}
