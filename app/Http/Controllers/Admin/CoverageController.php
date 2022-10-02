<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coverage;
use App\Models\District;
use App\Models\Featureimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoverageController extends Controller
{
    public function index(){
        $coverages = Coverage::all();
        $districts = District::all();
        return view('admin.pages.coverage',[
            'coverages' => $coverages,
            'districts' => $districts,
            'featureimage' => Featureimage::where('name', 'coverage')->first()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'district' => 'required',
            'phone' => 'required|numeric',
            'code' => 'required|numeric'
        ]);
        
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

    public function edit(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'address' => 'required',
            'district' => 'required',
            'phone' => 'required|numeric',
            'code' => 'required|numeric'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        } 
            $coverage = Coverage::find($request->id);
            $coverage->name = $request->name;
            $coverage->address = $request->address;
            $coverage->district_id = $request->district;
            $coverage->phone = $request->phone;
            $coverage->	postcode = $request->code;
            if($coverage->save()){
                return back()->with('successed','Data update successfull');
            }else{
                return back()->with('fail','query failed');
            }
        
    }

    public function destroy(Request $request)
    {
        $dlt = Coverage::find($request->id);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }
}
