<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::paginate(5); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.work.work', compact('works'));
    }

public function create()
    {
        return view('admin.work.create');
    }


 public function store(Request $request){
        // Validasi data yang dikirimkan melalui formulir
        // dd($request->all());
        $data = Work::create($request->all());
        if ($request->file('photo')) {
            $hashfilename = Str::random(40);
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'photowork/' . $filename;
            $request->photo->move(public_path('photowork'), $filename);
            $data->photo = $filePath;
        }
        $data->save();
        return redirect()->route('admin.work.work')->with('success','Data Berhasil DI Tambahkan');
    }

public function editwork($id){

    $data = Work::find($id);
    return view('admin.work.editwork', compact('data'));
}

public function updatework(Request $request, $id){
$data = Work::find($id);
$data->update($request->all());
return redirect()->route('admin.work.work')->with('success','Data Berhasil DI Update');
}

public function deletework($id){
    $data = Work::find($id);
    $data->delete();
    return redirect()->route('admin.work.work')->with('success','Data Berhasil DI Delete');

}
}
