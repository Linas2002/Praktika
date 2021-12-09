<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except']);
    }

    public function home(){
        return view("pages.home");
    }
}
