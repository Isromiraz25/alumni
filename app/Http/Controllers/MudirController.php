<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Mudir;
use Illuminate\Http\Request;

class MudirController extends Controller
{
    public function index()
    {
        $mudir = Mudir::paginate(5); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.mudir.mudir', compact('mudir'));
    }

public function create()
    {
        return view('admin.mudir.create');
    }


 public function store(Request $request){
        // Validasi data yang dikirimkan melalui formulir
        // dd($request->all());
        $data = Mudir::create($request->all());
        if ($request->file('photo')) {
            $hashfilename = Str::random(40);
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'photomudir/' . $filename;
            $request->photo->move(public_path('photomudir'), $filename);
            $data->photo = $filePath;
        }
        $data->save();
        return redirect()->route('admin.mudir.mudir')->with('success','Data Berhasil DI Tambahkan');
    }

public function editmudir($id){

    $data = Mudir::find($id);
    return view('admin.mudir.editmudir', compact('data'));
}

public function updatemudir(Request $request, $id){
$data = Mudir::find($id);
$data->update($request->all());
if ($request->file('photo')) {
    $hashfilename = Str::random(40);
    $file = $request->file('photo');
    $extension = $file->getClientOriginalExtension();
    $filename = $hashfilename . '.' . $extension;
    $filePath = 'photomudir/' . $filename;
    $request->photo->move(public_path('photomudir'), $filename);
    $data->photo = $filePath;
}
$data->save();
return redirect()->route('admin.mudir.mudir')->with('success','Data Berhasil DI Update');
}

public function deletemudir($id){
    $data = Mudir::find($id);
    $data->delete();
    return redirect()->route('admin.mudir.mudir')->with('success','Data Berhasil DI Delete');

}
}
