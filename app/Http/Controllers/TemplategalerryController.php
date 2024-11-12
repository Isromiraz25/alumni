<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TemplategalerryController extends Controller
{
    public function frontgalerry(){
        $linkgallery =  DB::table("gallerys")->take(6)->get();
        return view("frontend.include.gallery",compact("linkgallery"));
    }

}
