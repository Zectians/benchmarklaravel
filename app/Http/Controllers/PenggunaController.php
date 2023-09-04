<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerPengguna(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_hp' => 'required'
        ]);

        Pengguna::create($data);
        return ResponseFormatter::success($data, "Added Data Succesfully");
    }

    public function updatePengguna(Request $request, Pengguna $pengguna)
    {
        $data = $request->validate([
            'nama' => 'nullable',
            'email' => 'nullable',
            'password' => 'nullable',
            'no_hp' => 'nullable'
        ]);

        $pengguna->update($data);
        return ResponseFormatter::success($pengguna, "Update Data Succesfully");
    }
    public function index()
    {
        $pengguna = Pengguna::all();
        return ResponseFormatter::success($pengguna, 'Get Data Pengguna Succesfully');
    }

    public function hapusPengguna(Pengguna $pengguna)
    {
        $pengguna->delete();
        return ResponseFormatter::success("", "Deleted Successfuly");
    }
    
}
