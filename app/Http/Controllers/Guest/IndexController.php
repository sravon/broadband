<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $slidercount = count($sliders);
        return view('guest.index',['sliders' => $sliders,'slidercount' => $slidercount]);
    }

    public function page($id)
    {
        $page = Page::find($id);
        return view('guest.page',['page' => $page]);
    }
}
