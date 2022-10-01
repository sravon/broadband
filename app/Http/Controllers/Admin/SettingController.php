<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Featureimage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index()
    {
        $about = Setting::find(1);
        return view('admin.pages.setting',['setting' => $about]);
    }
    public function store(Request $request)
    {
        $file = $request->file('image');

    echo $file_name = time() . $file->getClientOriginalName();                      

    $file_path = 'logo/';

    $file->move($file_path, $file_name);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'logo' => 'nullable|mimes:jpeg,png,jpg,gif|max:1024',
            'icon' => 'nullable|mimes:jpeg,png,jpg,gif,ico|max:1024|dimensions:max_width=200,max_height=200',
            'description' => 'required'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        }

        $setting = Setting::find(1);
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file_name = time() . $file->getClientOriginalName();                      
            $file->move('logo/', $file_name);
            $filepath ='logo/'.$file_name;
            if(File::exists(public_path($setting->logo))){
                File::delete(public_path($setting->logo));
            }else{
                return back()->with('fail','File does not exists.');
            }
        }else{
            $filepath = $setting->logo;
        }
        $setting->name = $request->name;
        $setting->logo = $filepath;
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $file_name = time() . $file->getClientOriginalName();                      
            $file->move('logo/', $file_name);
            $filepath ='logo/'.$file_name;
            if(File::exists(public_path($setting->icon))){
                File::delete(public_path($setting->icon));
            }
            // else{
            //     return back()->with('fail','File does not exists.');
            // }
        }else{
            $filepath = $setting->icon;
        }
        $setting->icon = $filepath;
        $setting->description = $request->description;
        if($setting->save()){
            return back()->with('successed','Data update successfull');
        }else{
            return back()->with('fail','query failed');
        }
    }

    public function updateFeatureImage(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        }

        $setting = Featureimage::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();                      
            $file->move('assets/logo/', $file_name);
            $filepath ='assets/logo/'.$file_name;
            if(File::exists(public_path($setting->logo))){
                File::delete(public_path($setting->logo));
            }else{
                return back()->with('fail','File does not exists.');
            }
        }else{
            $filepath = $setting->logo;
        }
        $setting->image = $filepath;
        if($setting->save()){
            return back()->with('success','Data update successfull');
        }else{
            return back()->with('fail','query failed');
        }
    }
}
