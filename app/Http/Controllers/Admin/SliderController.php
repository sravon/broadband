<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.pages.sliders',['sliders' => $sliders]);
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
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:1024'
        ]);
        $imageName = time().'.'.$request->image->extension();
        //Image::make($image->getRealPath())->resize(200, 200)->save($path);
        $slider = new Slider();
        //$bank->image = $request->image->move(public_path('banks'), $imageName);
        $slider->image = $request->image->storeAs('sliders', $imageName);
        
        if($slider->save()){
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
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:1024'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        }

        $slider = Slider::find($request->id);
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $filepath = $request->image->storeAs('sliders', $imageName);
            if(File::exists(public_path($slider->image))){
                File::delete(public_path($slider->image));
            }else{
                return back()->with('fail','File does not exists.');
            }
        }else{
            $filepath = $slider->image;
        }
        $slider->image = $filepath;
        if($slider->save()){
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
        $dlt = Slider::find($id);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }
}
