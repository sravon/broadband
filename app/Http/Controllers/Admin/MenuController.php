<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LinkPageToMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function store(Request $request){
        
        $dd = DB::table('link_page_to_menus')
              ->where('pageid', $request->page_id)
              ->update(['submenutype' => 0]);
              if($dd){
                return 1;
            }else{
                return 0;
            }
    }
}
