<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function item()
    {
        //itemテーブルに入っているレコードをすべて取得する
        $item = Item::all();
        return view('item.list')->with([
            'item' => $item,
        ]);
    }



    public function edit(Request $request)
    {
        //一覧から指定されたIDと同じIDのレコードを取得する。
        $item = Item::find($request->id);
        $type = item::TYPE;
        return view('item.edit', compact('type'))->with([
            'item' => $item,
        ]);
    }



    // [/registeri]でリクエストが来たら、[registeri.blade.php]を返す

    public function register()
    {
        $type = item::TYPE;
        return view('item.register', compact('type'));
    }


    public function itemRegister(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required',
            'detail' => 'required',
        ],
        [
            'name.required' => '商品名を入力してください',
            'type.required' => 'カテゴリを選択してください',
            'detail.required' => '商品詳細を入力してください',
        ]);
        
        
        //新しく商品を登録する
        $item =  new Item();
        $item->user_id = 1;
        $item->name = $request->name;
        $item->status = 1;
        $item->type = $request->type;
        $item->detail = $request->detail;
        $item->save();

        return redirect('/item/list');
    }



    public function itemEdit(Request $request)
    {

        //既存のレコードを取得して、編集してから保存する
        $item = Item::find($request->id);
        $item->name = $request->name;
        $item->type = $request->type;
        $item->detail = $request->detail;
        $item->status = $request->status;
        $item->save();

        return redirect('/item/list');
    }

    // public function itemDelete(Request $request){

    //     //既存のレコードを取得して、削除する
    //     $item = Item::find($request->id);
    //     $item->delete();

    //     return redirect('/item/list');
    // }


}
