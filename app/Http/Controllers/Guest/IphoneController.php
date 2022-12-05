<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Featureimage;
use App\Models\Ip_phone;
use Illuminate\Http\Request;

class IphoneController extends Controller
{
    public function index(){
        //return Ip_phone::all();
        return view('guest.ip_phones',[
            'ip_phones' => Ip_phone::all(),
            'featureimage' => Featureimage::where('name','ip_phones')->first()
        ]);
    }
}
