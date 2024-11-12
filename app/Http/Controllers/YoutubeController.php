<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function create()
    {
        return view('admin.youtube.create');
    }


    public function index()
    {
        $youtube = Youtube::paginate(5); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.youtube.index', compact('youtube'));
    }
    public function store(Request $request){
        // Validasi data yang dikirimkan melalui formulir
        // dd($request->all());
        $data = Youtube::create($request->all());
        $data->save();
        return redirect()->route('admin.youtube.index')->with('success','Data Berhasil DI Tambahkan');
    }

public function edityoutube($id){

    $data = Youtube::find($id);
    return view('admin.youtube.edit', compact('data'));
}

public function updateyoutube(Request $request, $id){
$data = Youtube::find($id);
$data->update($request->all());
return redirect()->route('admin.youtube.index')->with('success','Data Berhasil DI Update');
}

public function deleteyoutube($id){
    $data = Youtube::find($id);
    $data->delete();
    return redirect()->route('admin.youtube.index')->with('success','Data Berhasil DI Delete');

}
}
