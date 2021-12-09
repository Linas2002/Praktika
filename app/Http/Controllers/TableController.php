<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except']);
    }

    public function clients(){
        $tables = Table::all();
        return view("pages.clients", compact("tables"));
    }
    
    public function form()
    {
        return view("pages.client-add");
    }

    public function storeClient(Request $request){
        $validated = $request->validate([
            'identify' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required',
            'gmail' => 'required',
            'personalContact' => 'required',
            'contactPhone' => 'required',
            'note' => 'required',                
        ]);
        
        

        Table::create([
            'identify' => request('identify'),
            'address' => request('address'),
            'phone' => request('phone'),
            'gmail' => request('gmail'),
            'personalContact' => request('personalContact'),
            'contactPhone' => request('contactPhone'),
            'note' => request('note'),
        ]);
        return redirect("/");
    }
}
