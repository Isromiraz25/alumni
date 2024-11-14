<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TempletStrukturController extends Controller
{
    public function frontstruktur()
    {
        $penasehat = DB::table("struktur")
            ->where('jabatan', 'Penasehat') // CEO atau posisi teratas
            ->get();


        $pembina = DB::table("struktur")
            ->where('jabatan', 'Pembina') // Kepala departemen
            ->get();

        $ketuaumum = DB::table("struktur")
            ->where('jabatan', 'Ketua Umun') // Kepala departemen
            ->get();

        $wakilketua = DB::table("struktur")
            ->where('jabatan', 'Wakil Ketua') // Team leader
            ->get();

        $sekbendahara = DB::table("struktur")
            ->where('jabatan', 'Sek bendahara') // Staf
            ->get();

        $pendidikan = DB::table("struktur")
            ->where('jabatan', 'Pendidikan') // Staf
            ->get();

        $wirausaha = DB::table("struktur")
            ->where('jabatan', 'Wirausaha') // Staf
            ->get();
        $datin = DB::table("struktur")
            ->where('jabatan', 'Datin') // Staf
            ->get();

        $humas = DB::table("struktur")
            ->where('jabatan', 'Wirausaha') // Staf
            ->get();

        return view("frontend.include.struktur", compact("penasehat", "pembina", "ketuaumum", "wakilketua", "sekbendahara", "pendidikan", "wirausaha", "datin", "humas"));
    }
}
