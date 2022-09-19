<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social_media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SociaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialmedia = Social_media::all();
        return view('admin.pages.socialmedia',['socialmedia' => $socialmedia]);
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
            'icon' => 'required',
            'link' => 'required'
        ]);
        $name = str_replace("-"," ",$request->icon);
        $socialmedia = new Social_media();
        $socialmedia->name = $name;
        $socialmedia->icon = $request->icon;
        $socialmedia->link = $request->link;
        
        if($socialmedia->save()){
            return back()->with('success','New Social Media Register Success');
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
            'link' => 'required'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        } 
        $socialmedia = Social_media::find($request->id);
        $socialmedia->link = $request->link;
        if($socialmedia->save()){
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
    public function destroy($id)
    {
        $dlt = Social_media::find($id);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }
}
