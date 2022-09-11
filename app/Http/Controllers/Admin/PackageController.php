<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $packages = Package::all();
        return view('admin.pages.package',['packages' => $packages]);
        //return view('guest.package',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mb' => 'required|numeric',
            'tk' => 'required|numeric'
        ]);
        
        // Insert Data
        $package = new Package;
        $package->title = $request->name;
        $package->mb = $request->mb;
        $package->tk = $request->tk;
        $package->description = implode("||",$request->description);
        if($package->save()){
            return back()->with('success','New Package Register Success');
        }else{
            return back()->with('fail','Something went to wrong,try again later');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'mb' => 'required|numeric',
            'tk' => 'required|numeric'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        }

        $package = Package::find($request->id);
        $package->title = $request->title;
        $package->mb = $request->mb;
        $package->tk = $request->tk;
        $package->description = implode("||",$request->description);
        if($package->save()){
            return back()->with('successed','Data update successfull');
        }else{
            return back()->with('fail','Query failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dlt = Package::find($id);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }
}
