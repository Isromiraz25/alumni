<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class GalleryController extends Controller
{
    public function create()
    {
        return view('admin.gallery.create');
    }


    public function index()
    {
        $gallerys = Gallery::paginate(5); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.gallery.gallery', compact('gallerys'));
    }
    public function store(Request $request){
        // Validasi data yang dikirimkan melalui formulir
        // dd($request->all());
        $data = Gallery::create($request->all());
        if ($request->file('photo')) {
            $hashfilename = Str::random(40);
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'photogallery/' . $filename;
            $request->photo->move(public_path('photogallery'), $filename);
            $data->photo = $filePath;
        }
        $data->save();
        return redirect()->route('admin.gallery.gallery')->with('success','Data Berhasil DI Tambahkan');
    }

public function editgallery($id){

    $data = Gallery::find($id);
    return view('admin.gallery.editgallery', compact('data'));
}

public function updategallery(Request $request, $id){
$data = Gallery::find($id);
$data->update($request->all());
if ($request->file('photo')) {
    $hashfilename = Str::random(40);
    $file = $request->file('photo');
    $extension = $file->getClientOriginalExtension();
    $filename = $hashfilename . '.' . $extension;
    $filePath = 'photogallery/' . $filename;
    $request->photo->move(public_path('photogallery'), $filename);
    $data->photo = $filePath;
}
$data->save();
return redirect()->route('admin.gallery.gallery')->with('success','Data Berhasil DI Update');
}

public function deletegallery($id){
    $data = Gallery::find($id);
    $data->delete();
    return redirect()->route('admin.gallery.gallery')->with('success','Data Berhasil DI Delete');

}
}
