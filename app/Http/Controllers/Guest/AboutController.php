<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        //return About::find(1);
        return view('guest.about',['about' => About::find(1)]);
    }
}
