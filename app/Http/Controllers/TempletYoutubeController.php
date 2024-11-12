<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TempletYoutubeController extends Controller
{
    public function frontalumni(){

        $linkyoutube =  DB::table("youtube")->get();
        return view("frontend.include.youtube",compact("linkyoutube"));
    }

}
