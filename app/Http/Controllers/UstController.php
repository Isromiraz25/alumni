<?php

namespace App\Http\Controllers;

use App\Models\Ust;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class UstController extends Controller
{
    public function index()
    {
        $ust = Ust::paginate(5); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.ust.ust', compact('ust'));
    }

public function create()
    {
        return view('admin.ust.create');
    }


 public function store(Request $request){
        // Validasi data yang dikirimkan melalui formulir
        // dd($request->all());
        $data = Ust::create($request->all());
        if ($request->file('photo')) {
            $hashfilename = Str::random(40);
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'photoust/' . $filename;
            $request->photo->move(public_path('photoust'), $filename);
            $data->photo = $filePath;
        }
        $data->save();
        return redirect()->route('admin.ust.ust')->with('success','Data Berhasil DI Tambahkan');
    }

public function editust($id){

    $data = Ust::find($id);
    return view('admin.ust.editust', compact('data'));
}

public function updateust(Request $request, $id){
$data = Ust::find($id);
$data->update($request->all());
if ($request->file('photo')) {
    $hashfilename = Str::random(40);
    $file = $request->file('photo');
    $extension = $file->getClientOriginalExtension();
    $filename = $hashfilename . '.' . $extension;
    $filePath = 'photoust/' . $filename;
    $request->photo->move(public_path('photoust'), $filename);
    $data->photo = $filePath;
}
$data->save();
return redirect()->route('admin.ust.ust')->with('success','Data Berhasil DI Update');
}

public function deleteust($id){
    $data = Ust::find($id);
    $data->delete();
    return redirect()->route('admin.ust.ust')->with('success','Data Berhasil DI Delete');

}
}
