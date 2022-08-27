<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pay = Pay::all();
        return view('admin.pages.pays',['pays' => $pay]);
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
        $pay = new Pay();
        $pay->name = $request->name;
        $pay->image = $request->image->storeAs('pays', $imageName);
        
        if($pay->save()){
            return back()->with('success','New Pay Register Success');
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

        $pay = Pay::find($request->id);
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $filepath = $request->image->storeAs('pays', $imageName);
            if(File::exists(public_path($pay->image))){
                File::delete(public_path($pay->image));
            }else{
                return back()->with('fail','File does not exists.');
            }
        }else{
            $filepath = $pay->image;
        }
        
        $pay->name = $request->name;
        $pay->image = $filepath;
        if($pay->save()){
            return back()->with('successed','Data update successfull');
        }else{
            return back()->with('fail','query failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pay)
    {
        $dlt = Pay::find($pay);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }
}
