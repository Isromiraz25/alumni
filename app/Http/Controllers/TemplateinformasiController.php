<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemplateinformasiController extends Controller
{
    public function frontinformasi()
    {
        $dataalumni =  DB::table("alumnis")->get();
        $datagallery =  DB::table("gallerys")->take(6)->get();
        $datamudir =  DB::table("mudir")->take(6)->get();
        $infobursa =  DB::table("works")->take(6)->get();
        $infoalumni =  DB::table("infoalumnis")->take(6)->get();
        $infosantri =  DB::table("infosantris")->take(6)->get();
        $dataangkatan =  DB::table("angkatan")->get();
        $youtube =  DB::table("youtube")->get();
        $datasiswa =  DB::table("siswa")->get();
        // $sarans =  DB::table("sarans")->get();
        return view("frontend.include.informasi", compact("dataalumni", "datagallery", "datamudir", "infobursa", "infoalumni", "infosantri", "dataangkatan", "youtube", "datasiswa"));
    }
}
