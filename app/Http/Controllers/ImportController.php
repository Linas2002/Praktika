<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function snImport(){
        return view("pages.sn-import");
    }
}
