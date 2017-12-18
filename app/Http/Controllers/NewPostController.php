<?php

namespace Tartempion\Http\Controllers;

use Illuminate\Http\Request;

class NewPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get() {
        return view('new_post');
    }
}
