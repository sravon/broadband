<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = AccountInfo::all();
        return view('admin.pages.accounts',['accounts' => $accounts]);
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
            'bank' => 'required|numeric',
            'ac_no' => 'required|numeric',
            'r_no' => 'required|numeric',
            'branch' => 'required'
        ]);
        
        $accountinfo = new AccountInfo;
        $accountinfo->name = $request->name;
        $accountinfo->bank_id = $request->bank;
        $accountinfo->ac_no = $request->ac_no;
        $accountinfo->r_no = $request->r_no;
        $accountinfo->branch = $request->branch;
        
        if($accountinfo->save()){
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
            'name' => 'required',
            'bank' => 'required|numeric',
            'ac_no' => 'required|numeric',
            'r_no' => 'required|numeric',
            'branch' => 'required'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        } 
        $accountinfo = AccountInfo::find($request->id);
        $accountinfo->name = $request->name;
        $accountinfo->bank_id = $request->bank;
        $accountinfo->ac_no = $request->ac_no;
        $accountinfo->r_no = $request->r_no;
        $accountinfo->branch = $request->branch;
        if($accountinfo->save()){
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
        $dlt = AccountInfo::find($id);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }
}
