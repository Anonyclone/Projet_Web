<?php

namespace Tartempion\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get() {
        return view('profil', [
            'edit' => false,
            'user' => Auth::user()
        ]);
    }

    public function post() {
        return view('profil', [
            'edit' => true,
            'user' => Auth::user()
        ]);
    }
}
