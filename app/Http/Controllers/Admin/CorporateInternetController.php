<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CorporateInternet;
use App\Models\Featureimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CorporateInternetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $corporateinternets = CorporateInternet::all();
        return view('admin.pages.corporate',[ 
            'corporateinternets' => $corporateinternets,
            'featureimage' => Featureimage::where('name', 'corporateinternet')->first()
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
            'icon_name' => 'required'
        ]);
        
        // Insert Data
        $corporateInternet = new CorporateInternet();
        $corporateInternet->name = $request->name;
        $corporateInternet->icon_name = $request->icon_name;
        $corporateInternet->items = implode("||",$request->description);
        if($corporateInternet->save()){
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
            'icon_name' => 'required'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        }

        $corporateInternet = Corporateinternet::find($request->id);
        $corporateInternet->name = $request->name;
        $corporateInternet->icon_name = $request->icon_name;
        $corporateInternet->items = implode("||",$request->description);
        if($corporateInternet->save()){
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
        $dlt = Corporateinternet::find($id);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }
}
