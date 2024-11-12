<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angkatan;
class AngkatanController extends Controller
{
    public function create()
    {
        return view('admin.tambahangkatan.create');
    }


    public function index()
    {
        $angkatan = Angkatan::paginate(5); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.tambahangkatan.angkatan', compact('angkatan'));
    }
    public function store(Request $request){
        // Validasi data yang dikirimkan melalui formulir
        // dd($request->all());
        $data = Angkatan::create($request->all());
        $data->save();
        return redirect()->route('admin.tambahangkatan.angkatan')->with('success','Data Berhasil DI Tambahkan');
    }

public function editangkatan($id){

    $data = Angkatan::find($id);
    return view('admin.tambahangkatan.editangkatan', compact('data'));
}

public function updateangkatan(Request $request, $id){
$data = Angkatan::find($id);
$data->update($request->all());
return redirect()->route('admin.tambahangkatan.angkatan')->with('success','Data Berhasil DI Update');
}

public function deleteangkatan($id){
    $data = Angkatan::find($id);
    $data->delete();
    return redirect()->route('admin.tambahangkatan.angkatan')->with('success','Data Berhasil DI Delete');

}
}

