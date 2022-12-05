<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Featureimage;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function viewData(){
        //return Package::all();
        $packages = Package::all();
        return view('guest.package',[
            'packages' => $packages,
            'featureimage' => Featureimage::where('name','package')->first()
        ]);
        //return view('guest.package',compact('packages'));
    }
}
