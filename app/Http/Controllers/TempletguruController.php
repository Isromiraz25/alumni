<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TempletguruController extends Controller
{
    public function frontguru(){

        $linkguru =  DB::table("ust")->get();
        return view("frontend.include.guru",compact("linkguru"));
    }
}
