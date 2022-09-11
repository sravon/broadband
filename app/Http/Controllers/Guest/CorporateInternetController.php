<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\CorporateInternet;
use Illuminate\Http\Request;

class CorporateInternetController extends Controller
{
    public function index(){
        //return Package::all();
        $corporateinternets = CorporateInternet::all();
        return view('guest.corporate_internet',['corporateinternets' => $corporateinternets]);
    }
}
