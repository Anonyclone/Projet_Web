<?php

namespace Tartempion\Http\Controllers;

use Illuminate\Http\Request;

class SearchPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get() {
        return view('search_post');
    }
}
