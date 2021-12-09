<?php

namespace App\Http\Controllers;
use App\Models\Base;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function rmabase(){
        return view("pages.rma-base");
    }

    public function rmaregist(){
        $bases = Base::all();
        return view("pages.rma-regist", compact('bases'));
    }

    public function addRmaBaseForm(){
        return view("pages.rma-add-base");
    }
    public function storeRma(Request $request, Base $base){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'phone' => 'required',
            'DeviceP' => 'required',
            'DeviceS' => 'required',
            'Description' => 'required',
                         
        ]);

        Base::create([
            'title' => request('title'),
            'phone' => request('phone'),
            'DeviceP' => request('DeviceP'),
            'DeviceS' => request('DeviceS'),
            'Description' => request('Description'),
        ]);
        
        return redirect("/");
    }

    public function rmacheck(){
        $bases = Base::all();
        return view("pages.rma-check", compact('bases'));
    }

  
}   
