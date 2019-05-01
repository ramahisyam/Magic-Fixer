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
        
    }

    public function show(Item $items)
    {
        return view('admin.show', compact('items'));
    }
}
