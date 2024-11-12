<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use App\Models\Angkatan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Exports\AlumniExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = DB::table('alumnis')
        ->select('alumnis.id','alumnis.nama','alumnis.agama','alumnis.jenis_kelamin','alumnis.angkatan_id','alumnis.no_tlp','alumnis.tahun_lulus','alumnis.alamat','alumnis.photo','angkatan.nama_angkatan','angkatan.angkatan')
        ->join('angkatan','angkatan.id','=','alumnis.angkatan_id')
        ->paginate(); // Gantilah dengan query yang sesuai dengan model dan kebutuhan Anda.
        return view('admin.dataalumni.alumni', compact('alumnis'));

    }


public function export(){
    return Excel::download(new AlumniExport(),'alumni.xlsx');
}


public function create()
    {
        $angkatan = DB::table('angkatan')->get();
        return view('admin.dataalumni.create',compact('angkatan'));
    }


 public function store(Request $request){
        // Validasi data yang dikirimkan melalui formulir
        // dd($request->all());
        $data = Alumni::create($request->all());
        if ($request->file('photo')) {
            $hashfilename = Str::random(40);
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $hashfilename . '.' . $extension;
            $filePath = 'photoalumni/' . $filename;
            $request->photo->move(public_path('photoalumni'), $filename);
            $data->photo = $filePath;
        }
        $data->save();
        return redirect()->route('admin.dataalumni.alumni')->with('success','Data Berhasil DI Tambahkan');
    }

public function editalumni($id){

    $angkatan = Angkatan::get();
    $data = Alumni::where('id',$id)->first();
    // dd($data);
// dd($data->angkatan()->first()->nama_angkatan);
    return view('admin.dataalumni.editalumni', compact('data','angkatan'));
}

public function updatealumni(Request $request, $id){

$data = Alumni::find($id);
$data->update($request->all());
if ($request->file('photo')) {
    $hashfilename = Str::random(40);
    $file = $request->file('photo');
    $extension = $file->getClientOriginalExtension();
    $filename = $hashfilename . '.' . $extension;
    $filePath = 'photoalumni/' . $filename;
    $request->photo->move(public_path('photoalumni'), $filename);
    $data->photo = $filePath;
}
$data->save();
return redirect()->route('admin.dataalumni.alumni')->with('success','Data Berhasil DI Update');
}

public function deletealumni($id){
    $data = Alumni::find($id);
    $data->delete();
    return redirect()->route('admin.dataalumni.alumni')->with('success','Data Berhasil DI Delete');

}
// public function search(Request $request)
// {
//     $query = $request->input('query');

//     $dataalumni = Alumni::where('nama', 'LIKE', '%' . $query . '%')
//                         ->orWhere('angkatan_id', 'LIKE', '%' . $query . '%')
//                         ->get();

//     return view('admin.dataalumni.alumni', compact('dataalumni'));
// }
}
