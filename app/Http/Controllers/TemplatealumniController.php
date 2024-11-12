<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemplatealumniController extends Controller
{
    public function frontalumni(){

        $linkalumni =  DB::table("alumnis")->get();
        return view("frontend.include.alumni",compact("linkalumni"));
    }



}


