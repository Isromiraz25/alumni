<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalAlumni = DB::table('alumnis')->count();
        $totalsiswa = DB::table('siswa')->count();
        return view('admin.dashboard.index',compact('totalAlumni','totalsiswa'));
  
    }
 

    

public function getDataAlumin ($id){
        $data = DB::table('alumnis')->where('angkatan_id',$id)->get();

        return response()->json($data);
    }

}
