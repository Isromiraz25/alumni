<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAlumni = DB::table('alumnis')->count();
        $totalsiswa = DB::table('siswa')->count();
        $totalguru = DB::table('ust')->count();
        return view('admin.dashboard.index',compact('totalAlumni','totalsiswa','totalguru'));
  
    }
 

    

public function getDataAlumin ($id){
        $data = DB::table('alumnis')->where('angkatan_id',$id)->get();

        return response()->json($data);
    }
}
