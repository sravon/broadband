<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $req){
        if($req->source && $req->source == 'edit' && $req->id){
            $singlevalue = Page::find($req->id);
        }else{
            $singlevalue = null;
        }
        return view('admin.pages.pages',[
            'pages' => Page::all(),
            'singlevalue' => $singlevalue
        ]);;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'editor1' => 'required'
        ]);
        $page = new Page();
        $page->name = $request->name;
        $page->description = $request->editor1;
        
        if($page->save()){
            return back()->with('successed','New page added Success');
        }else{
            return back()->with('fail','Something went to wrong,try again later');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'editor1' => 'required'
        ]);
        

        $page = Page::find($id);
        
        $page->name = $request->name;
        $page->description = $request->editor1;
        if($page->save()){
            return back()->with('successed','Data update successfull');
        }else{
            return back()->with('fail','query failed');
        }
    }

    public function destroy($id)
    {
        $dlt = Page::find($id);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }
}
