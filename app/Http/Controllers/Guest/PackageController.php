<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function viewData(){
        //return Package::all();
        $packages = Package::all();
        return view('guest.package',['packages' => $packages]);
        //return view('guest.package',compact('packages'));
    }
}
