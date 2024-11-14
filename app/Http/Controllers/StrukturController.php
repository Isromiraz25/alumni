<?php

namespace App\Http\Controllers;
use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class StrukturController extends Controller
{
    public function index()
    {
        $struktur = Struktur::paginate(5); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.struktur.index', compact('struktur'));
    }

    public function create()
    {
        return view('admin.struktur.create');
    }

    public function store(Request $request)
    {
        // Create the initial record without handling file uploads
        $data = Struktur::create($request->all());
    
        // Handle ijazah upload
      
        // Handle photo upload
        if ($request->file('photo')) {
            $hashfilename = Str::random(40);
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'photoStruktur/' . $filename;
            $file->move(public_path('photostruktur'), $filename);
            $data->photo = $filePath;
        }
    
        // Save updated fields for file paths
        $data->save();
    
        return redirect()->route('admin.struktur.index')->with('success', 'Data Berhasil Ditambahkan');
    }
    

public function editstruktur($id){

    $data = Struktur::find($id);
    return view('admin.struktur.edit', compact('data'));
}

public function updatestruktur(Request $request, $id){
    $data = Struktur::find($id);
    $data->update($request->all());
     
    if ($request->file('photo')) {
        $hashfilename = Str::random(40);
        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = $hashfilename . '.' . $extension;
        $filePath = 'photostruktur/' . $filename;
        $request->photo->move(public_path('photostruktur'), $filename);
        $data->photo = $filePath;
    }
    $data->save();
    return redirect()->route('admin.struktur.index')->with('success','Data Berhasil DI Update');
}

public function deletestruktur($id){
    $data = Struktur::find($id);
    $data->delete();
    return redirect()->route('admin.struktur.index')->with('success','Data Berhasil DI Delete');

}
}
