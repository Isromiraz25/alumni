<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplatemisiController extends Controller
{
    public function frontmisi(){
        return view("frontend.include.misi");
    }
}
