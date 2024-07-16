<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai_model;
use DB;

class pegawai extends Controller
{
    public function index()
    {
        return view('pegawai');
    }

    public function simpanData(Request $request)
    {
        $Nama = $request->Nama;
        $NIK = $request->NIK;
        $id_departemen = $request->id_departemen;
        $tgl_lahir = $request->tgl_lahir;
        $alamat = $request->alamat;

        $pegawai = new pegawai_model;
        $pegawai->Nama = $Nama;
        $pegawai->NIK = $NIK;
        $pegawai->id_departemen = $id_departemen;
        $pegawai->tgl_lahir = $tgl_lahir;
        $pegawai->alamat = $alamat;
        $pegawai->save();

        return redirect('lihatData');
    }

    public function lihatData()
    {
        $Parameter = [
            'Pegawai' => pegawai_model::all()
        ];
        return view('lihatData', $Parameter);
    }

    public function editData($ID)
    {
        $Parameter = [
            'Pegawai' => pegawai_model::find($ID),
            'ID' => $ID
        ];
        return view('editData', $Parameter);
    }

    public function updateData(Request $request)
    {
        DB::table('pegawai')->where('ID', $request->ID)->update([
            'Nama' => $request->Nama,
            'NIK' => $request->NIK,
            'id_departemen' => $request->id_departemen,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
        ]);
        return redirect('lihatData');
    }

    public function hapusData($ID)
    {
        DB::table('pegawai')->where('ID', $ID)->delete();
        return redirect('lihatData');
    }
}
