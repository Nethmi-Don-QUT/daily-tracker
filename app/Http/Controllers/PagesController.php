<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to Daily Tracker";
        return view('pages.index')->with('title', $title);
    }
}
