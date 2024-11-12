<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::paginate(5); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.siswa.siswa', compact('siswa'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        // Create the initial record without handling file uploads
        $data = Siswa::create($request->all());
    
        // Handle ijazah upload
        if ($request->file('ijazah')) {
            $hashfilename = Str::random(40);
            $file = $request->file('ijazah');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'ijazahsiswa/' . $filename;
            $file->move(public_path('ijazahsiswa'), $filename);
            $data->ijazah = $filePath;
        }
    
        // Handle kk upload
        if ($request->file('kk')) {
            $hashfilename = Str::random(40);
            $file = $request->file('kk');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'kksiswa/' . $filename;
            $file->move(public_path('kksiswa'), $filename);
            $data->kk = $filePath;
        }
    
        // Handle photo upload
        if ($request->file('photo')) {
            $hashfilename = Str::random(40);
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'photosiswa/' . $filename;
            $file->move(public_path('photosiswa'), $filename);
            $data->photo = $filePath;
        }
    
        // Save updated fields for file paths
        $data->save();
    
        return redirect()->route('admin.siswa.siswa')->with('success', 'Data Berhasil Ditambahkan');
    }
    

public function editsiswa($id){

    $data = Siswa::find($id);
    return view('admin.siswa.edit', compact('data'));
}

public function updatesiswa(Request $request, $id){
    $data = Siswa::find($id);
    $data->update($request->all());
     if ($request->file('ijazah')) {
            $hashfilename = Str::random(40);
            $file = $request->file('ijazah');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'ijazahsiswa/' . $filename;
            $file->move(public_path('ijazahsiswa'), $filename);
            $data->ijazah = $filePath;
        }
    
    if ($request->file('kk')) {
        $hashfilename = Str::random(40);
        $file = $request->file('kk');
        $extension = $file->getClientOriginalExtension();
        $filename = $hashfilename . '.' . $extension;
        $filePath = 'kksiswa/' . $filename;
        $request->kk->move(public_path('kksiswa'), $filename);
        $data->kk = $filePath;
    }
 
    if ($request->file('photo')) {
        $hashfilename = Str::random(40);
        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = $hashfilename . '.' . $extension;
        $filePath = 'photosiswa/' . $filename;
        $request->photo->move(public_path('photosiswa'), $filename);
        $data->photo = $filePath;
    }
    $data->save();
    return redirect()->route('admin.siswa.siswa')->with('success','Data Berhasil DI Update');
}

public function deletesiswa($id){
    $data = Siswa::find($id);
    $data->delete();
    return redirect()->route('admin.siswa.siswa')->with('success','Data Berhasil DI Delete');

}
}
