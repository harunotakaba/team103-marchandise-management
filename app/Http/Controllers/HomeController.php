<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $query=Item::query();
        if($request->key){
            $query=$query->where("name","like","%".$request->key."%");
        }
        $items =$query->orderBy('created_at', 'asc')->paginate(10);
        return view('items.index',[
            'items' => $items,
        ]);
        
    }
    public function detail(Request $request)
    {
        $item = Item::find($request->id);
        return view('items.detail',[
            'item' => $item,
        ]);
    }
}
