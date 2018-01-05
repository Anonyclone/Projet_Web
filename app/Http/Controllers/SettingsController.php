<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingsRequest;
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

    public function post(UpdateSettingsRequest $request) {
        $user = Auth::user();
        $user->pseudo = $request->input('pseudo');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return view('settings', [
           'edit' => false,
           'user' => $user
        ]);
    }
}
