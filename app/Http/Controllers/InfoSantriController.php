<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Infosantri;
use Illuminate\Http\Request;

class InfoSantriController extends Controller
{
    public function index()
    {
        $infosantris = Infosantri::paginate(5); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.infosantri.infosantri', compact('infosantris'));
    }

public function create()
    {
        return view('admin.infosantri.create');
    }


 public function store(Request $request){
        // Validasi data yang dikirimkan melalui formulir
        // dd($request->all());
        $data = Infosantri::create($request->all());
        if ($request->file('photo')) {
            $hashfilename = Str::random(40);
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'photoinfosantri/' . $filename;
            $request->photo->move(public_path('photoinfosantri'), $filename);
            $data->photo = $filePath;
        }
        $data->save();
        return redirect()->route('admin.infosantri.infosantri')->with('success','Data Berhasil DI Tambahkan');
    }

public function editinfosantri($id){

    $data = Infosantri::find($id);
    return view('admin.infosantri.editinfosantri', compact('data'));
}

public function updateinfosantri(Request $request, $id){
$data = Infosantri::find($id);
$data->update($request->all());
if ($request->file('photo')) {
    $hashfilename = Str::random(40);
    $file = $request->file('photo');
    $extension = $file->getClientOriginalExtension();
    $filename = $hashfilename . '.' . $extension;
    $filePath = 'photoinfosantri/' . $filename;
    $request->photo->move(public_path('photoinfosantri'), $filename);
    $data->photo = $filePath;
}
$data->save();
return redirect()->route('admin.infosantri.infosantri')->with('success','Data Berhasil DI Update');
}

public function deleteinfosantri($id){
    $data = Infosantri::find($id);
    $data->delete();
    return redirect()->route('admin.infosantri.infosantri')->with('success','Data Berhasil DI Delete');

}
}
