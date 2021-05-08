<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('welcome')->with(['items'=>$items]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $item = new Item();
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->amount = $request->input('amount');

        $item->save();

        return back()->with('success', "Your item has been saved");
    }
    public function edit(Item $item)
    {
        $item = Item::find($item->id);

        return view('edit')->with(['item'=>$item]);
    }
    public function update(Request $request, Item $item)
    {
        $item=Item::findOrFail($item->id);

        $item->update($request->only('name'));

        return redirect()->route('items.index')->with('success', "Item has been updated");
    }

    public function destroy(Item $item)
    {
        Item::destroy($item->id);
        return redirect()->route('items.index')->with('success', "Item has been deleted");
    }
}
