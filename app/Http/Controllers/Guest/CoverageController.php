<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Coverage;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class CoverageController extends Controller
{
    public function index(){
        //return Package::all();
        $coverages = Coverage::all();
        $districts = District::all();
        return view('guest.coverage',['districts' => $districts]);
    }
    
    public function getAreaByCountry(Request $request){
        $districts = DB::table('coverages')
            ->join('districts', 'coverages.district_id', '=', 'districts.id')
            ->select('districts.name as district','district_id')->distinct()
            ->get();
        $coverages = DB::table('coverages')
            ->join('districts', 'coverages.district_id', '=', 'districts.id')
            ->select('coverages.*', 'districts.name as district')
            ->get();
        if(empty($request->country))
            return view('guest.elements._arealist',['coverages'=>$coverages,'districts'=>$districts]);
        else{
            $inspect = explode('_',$request->country);
            $coverages = Coverage::where('district_id',$request->country)->get();
            $arr = (object)[(object)['district'=>$inspect[1],'district_id'=>$inspect[0]]];
            return view('guest.elements._arealist',['coverages'=>$coverages,'districts'=> $arr ]);
        }
    }
}
