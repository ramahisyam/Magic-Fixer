<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        
        if($user->hasRole('admin')) {
            return view('admin.home');
        } else {
            $user->assignRole('user');

            $categories = ItemCategory::all();

            return view('user.home', compact('categories'));
        }
    }
}
