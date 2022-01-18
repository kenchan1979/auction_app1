<?php

namespace App\Http\Controllers;

// Itemクラスを読み込む
use App\Models\Item;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{

    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $items = Item::all();
        // Itemsティレクトリーの中のindexページを指定し、itemsの連想配列を代入
        return view('items.index', ['items' => $items]);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(ItemRequest $request)
    {
        // インスタンスの作成
        $item = new Item;
        // 値の用意
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->seller = $request->seller;
        $item->email = $request->email;
        $item->image_url = $request->image_url;
        // インスタンスに値を設定して保存
        $item->save();
        // 登録したらindexに戻る
        return redirect('/items');
    }



    // showページへ移動
    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show', ['item' => $item]);
    }
    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit', ['item' => $item]);
    }

    public function update(ItemRequest $request, $id)
        {
        // ここはidで探して持ってくる以外はstoreと同じ
        $item = Item::find($id);
        // 値の用意
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->seller = $request->seller;
        $item->email = $request->email;
        $item->image_url = $request->image_url;
        // 保存
        $item->save();
        // 登録したらindexに戻る
        return redirect('/items');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items');
    }
}
