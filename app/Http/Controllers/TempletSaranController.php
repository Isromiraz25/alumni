<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TempletSaranController extends Controller
{
    public function frontsarans(){

        $linksarans =  DB::table("sarans")->get();
        return view("frontend.include.sarans",compact("linksarans"));
    }
}
