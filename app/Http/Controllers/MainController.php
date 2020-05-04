<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class MainController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = Page::where('name', 'home')->first();
        return view('welcome', compact('page'));
    }
}
