<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function store()
    {
        Item::create([
            'name' => request('name'),
            'description' => request('description'),
            'user_id' => request('user_id'),
            'item_category_id' => request('categories_id')
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $items = Item::latest()->get();

        return view('admin.home', compact('items'));
    }

    public function show(Item $items)
    {
        
    }
}
