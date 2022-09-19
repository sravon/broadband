<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.pages.users',['admins' => $admins]);
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
        //
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
            'role' => 'required'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        } 
        $district = Admin::find($request->id);
        $district->role = $request->role;
        if($district->save()){
            return back()->with('successed','Role update successfull');
        }else{
            return back()->with('fail','Query Failed');
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
        $dlt = Admin::find($id);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }

    public function profileupdate(Request $request,$id)
    {
        // print_r($_POST);
        // print_r($_FILES);
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:1024'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        }

        $slider = Admin::find($request->id);
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
        try {
            $slider->name = $request->name;
            $slider->phone = $request->phone;
            $slider->gender = $request->gender;
            $slider->image = $filepath;
            if($slider->save()){
                return back()->with('successed','Data update successfull');
            }else{
                return back()->with('fail','query failed');
            }
        } catch (\Exception $exception) {
            return redirect()->back()
                ->with('fail', 'Register operation failed. Cause '.$exception->getMessage());
        }
            
    }

    public function changePassword(Request $request){
        //return $request->input();
        $validator = Validator::make($request->all(),[
            'currentpassword' => 'required',
            'newpassword' => 'required|min:5|max:12',
            'confirmpassword' => 'required|same:newpassword'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        }
        $current_user = Auth::guard('admin')->user();
        if(Hash::check($request->currentpassword,$current_user->password)){
            Admin::where('id',$current_user->id)
            ->update([
                'password' => Hash::make($request->newpassword)
            ]);
            return back()->with('successed','password update successfull');
        }else{
            return redirect()->back()
                ->with('fail', 'Old Password Does Not Match');
        };
    }

}
