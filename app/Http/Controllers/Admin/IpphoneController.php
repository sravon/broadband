<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Featureimage;
use App\Models\Ip_phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class IpphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $ipphones = Ip_phone::all();
        return view('admin.pages.ipphone',[
            'ipphones' => $ipphones,
            'featureimage' => Featureimage::where('name', 'ip_phones')->first()
        ]);
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
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:1024'
        ]);
        $imageName = time().'.'.$request->image->extension();
        // Insert Data
        $ipphone = new Ip_phone();
        $ipphone->name = $request->name;
        $ipphone->image = $request->image->storeAs('banks', $imageName);
        $ipphone->items = implode("||",$request->description);
        if($ipphone->save()){
            return back()->with('success','Register Success');
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
            'name' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:1024'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        }
        $ipphone = Ip_phone::find($request->id);
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $filepath = $request->image->storeAs('banks', $imageName);
            if(File::exists(public_path($ipphone->image))){
                File::delete(public_path($ipphone->image));
            }else{
                return back()->with('fail','File does not exists.');
            }
        }else{
            $filepath = $ipphone->image;
        }
        $ipphone->name = $request->name;
        $ipphone->image = $filepath;
        $ipphone->items = implode("||",$request->description);
        if($ipphone->save()){
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
        $dlt = Ip_phone::find($id);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }
}
