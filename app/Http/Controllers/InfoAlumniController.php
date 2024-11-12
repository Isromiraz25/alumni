<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Infoalumni;
use Illuminate\Http\Request;

class InfoAlumniController extends Controller
{
    public function index()
    {
        $infoalumnis = Infoalumni::paginate(5); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.infoalumni.infoalumni', compact('infoalumnis'));
    }

public function create()
    {
        return view('admin.infoalumni.create');
    }


 public function store(Request $request){
        // Validasi data yang dikirimkan melalui formulir
        // dd($request->all());
        $data = Infoalumni::create($request->all());
        if ($request->file('photo')) {
            $hashfilename = Str::random(40);
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'photoinfoalumni/' . $filename;
            $request->photo->move(public_path('photoinfoalumni'), $filename);
            $data->photo = $filePath;
        }
        $data->save();
        return redirect()->route('admin.infoalumni.infoalumni')->with('success','Data Berhasil DI Tambahkan');
    }

public function editinfoalumni($id){

    $data = Infoalumni::find($id);
    return view('admin.infoalumni.editinfoalumni', compact('data'));
}

public function updateinfoalumni(Request $request, $id){
$data = Infoalumni::find($id);
$data->update($request->all());
if ($request->file('photo')) {
    $hashfilename = Str::random(40);
    $file = $request->file('photo');
    $extension = $file->getClientOriginalExtension();
    $filename = $hashfilename . '.' . $extension;
    $filePath = 'photoinfoalumni/' . $filename;
    $request->photo->move(public_path('photoinfoalumni'), $filename);
    $data->photo = $filePath;
}
$data->save();
return redirect()->route('admin.infoalumni.infoalumni')->with('success','Data Berhasil DI Update');
}

public function deleteinfoalumni($id){
    $data = Infoalumni::find($id);
    $data->delete();
    return redirect()->route('admin.infoalumni.infoalumni')->with('success','Data Berhasil DI Delete');

}
}
