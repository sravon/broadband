<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coverage;
use Illuminate\Http\Request;

class CoverageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'district' => 'required',
            'phone' => 'required|numeric',
            'code' => 'required|numeric'
        ]);
        //return $request->input();
        // Insert Data
        $coverage = new Coverage;
        $coverage->name = $request->name;
        $coverage->address = $request->address;
        $coverage->district_id = $request->district;
        $coverage->phone = $request->phone;
        $coverage->postcode = $request->code;
        if($coverage->save()){
            return back()->with('success','New Package Register Success');
        }else{
            return back()->with('fail','Something went to wrong,try again later');
        }
    }
}
