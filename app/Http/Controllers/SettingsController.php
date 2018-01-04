<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function get() {
        return view('settings', [
            'edit' => false,
            'user' => Auth::user()
        ]);
    }

    public function edit(){
        return view('settings', [
            'edit' => true,
            'user' => Auth::user()
        ]);
    }
}
