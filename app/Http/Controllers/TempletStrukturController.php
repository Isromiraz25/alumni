<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TempletStrukturController extends Controller
{
    public function frontstruktur(){

        return view('frontend.include.struktur');

        // $linkstruktur =  DB::table("struktur")->get();
        // return view("frontend.include.struktur",compact("linkstruktur"));
    }
}
