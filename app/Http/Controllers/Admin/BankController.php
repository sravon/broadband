<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountInfo;
use App\Models\Bank;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::all();
        return view('admin.pages.banks',['banks' => $banks]);
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
        //Image::make($image->getRealPath())->resize(200, 200)->save($path);
        $bank = new Bank();
        $bank->name = $request->name;
        //$bank->image = $request->image->move(public_path('banks'), $imageName);
        $bank->image = $request->image->storeAs('banks', $imageName);
        
        if($bank->save()){
            return back()->with('success','Added Success');
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

        $bank = Bank::find($request->id);
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $filepath = $request->image->storeAs('banks', $imageName);
            if(File::exists(public_path($bank->image))){
                File::delete(public_path($bank->image));
            }else{
                return back()->with('fail','File does not exists.');
            }
        }else{
            $filepath = $bank->image;
        }
        
        $bank->name = $request->name;
        $bank->image = $filepath;
        if($bank->save()){
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
    public function destroy($bank)
    {
            $checkbank = AccountInfo::where('bank_id', $bank)->first();
            if($checkbank){
                return response(["error" => "You Can't delete this. If you want to delete this, you need to delete child components(account) first, then you can delete this" ], 200);
            }
            $dlt = Bank::find($bank);
            $rst = $dlt->delete();
            if($rst){
                return response( "Delete Successfull" , 200);
            }else{
                return response( "Delete Error" , 400);
            }
        
    }
}
