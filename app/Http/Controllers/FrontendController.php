<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index(){
        $dataalumni =  DB::table("alumnis")->get();
        $datagallery =  DB::table("gallerys")->take(6)->get();
        $datamudir =  DB::table("mudir")->take(6)->get();
        $infobursa =  DB::table("works")->take(6)->get();
        $infoalumni =  DB::table("infoalumnis")->take(6)->get();
        $infosantri =  DB::table("infosantris")->take(6)->get();
        $dataangkatan =  DB::table("angkatan")->get();
        $dataguru =  DB::table("ust")->get();
        $datayoutube =  DB::table("youtube")->take(2)->get();
        $datasiswa =  DB::table("siswa")->get();
        $datastruktur =  DB::table("struktur")->get();
        // $datasarans =  DB::table("sarans")->get();
    return view("frontend.master",compact("dataalumni","datagallery","datamudir","infobursa","infoalumni","infosantri","dataangkatan","dataguru","datayoutube","datasiswa","datastruktur"));
    }
}
