<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TempletSiswaController extends Controller
{
    public function frontsiswa(){

        $linksiswa =  DB::table("siswa")->get();
        return view("frontend.include.siswa",compact("linksiswa"));
    }


    public function store(Request $request)
{
    $siswa = new Siswa();
    $siswa->name = $request->input('nama');
    $siswa->email = $request->input('email');
    $siswa->alamat = $request->input('alamat');
    $siswa->no_tlp = $request->input('no_tlp');
    $siswa->jenis_kelamin = $request->input('jenis_kelamin');
    $siswa->tempat_lahir = $request->input('tempat_lahir');
    $siswa->tanggal_lahir = $request->input('tanggal_lahir');
if ($request->hasFile('ijazah')) {
    $siswa->ijazah = $request->file('ijazah')->store('documents');
}
if ($request->hasFile('kartu_keluarga')) {
    $siswa->kartu_keluarga = $request->file('kartu_keluarga')->store('documents');
}
if ($request->hasFile('photo')) {
    $siswa->photo = $request->file('photo')->store('photos');
}

$siswa->save();



    // Save uploaded files, if needed
    
    return redirect()->back()->with('success', 'Data siswa berhasil disimpan!');
}


}
