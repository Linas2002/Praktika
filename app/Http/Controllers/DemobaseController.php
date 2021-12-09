<?php

namespace App\Http\Controllers;
use App\Models\DemoDevice;
use App\Models\DemoContract;
use App\Models\Base;

use Illuminate\Http\Request;

class DemobaseController extends Controller

{
    public function demobase(){
        return view("pages.demo-base");
    }

    public function demoDeviceAdd(){
        return view("pages.demo-device-add");
    }
    
    public function storeDevice(Request $request){
        $validated = $request->validate([
            'deviceP' => 'required',
            'deviceS' => 'required',
            'description' => 'required|max:255',
            
                         
        ]);

        DemoDevice::create([
            'deviceP' => request('deviceP'),
            'deviceS' => request('deviceS'),
            'description' => request('description'),
            
        ]);
        
        return redirect("/demo-base");
    }

    public function demoContractAdd(){
        return view("pages.demo-contract-add");
    }

    public function storeContract(Request $request){
        $validated = $request->validate([
            'clientID' => 'required|max:255',
            'deviceS' => 'required',
            'loanstart' => 'required',
            'loandays' => 'required',
            'loanend' => 'required',
            
                         
        ]);

        DemoContract::create([
            'clientID' => request('clientID'),
            'deviceS' => request('deviceS'),
            'loanstart' => request('loanstart'),
            'loandays' => request('loandays'),
            'loanend' => request('loanend'),
        ]);
        
        return redirect("/demo-base");
    }
    public function demoContractCheck(){
        $contracts = DemoContract::all();
        // $bases = Base::all();
        return view("pages.demo-contract-check", compact('contracts'));
    }

}