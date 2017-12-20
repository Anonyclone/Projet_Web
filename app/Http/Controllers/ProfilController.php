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

    public function edit() {
        return view('profil', [
           'edit' => true,
           'user' => Auth::user()
        ]);
    }

    public function post(Request $request) {
        $user = Auth::auth()->user();
        $user->surname = $request->input('surname');
        $user->firstname = $request->input('firstname');
        $user->birth_date = $request->input('birth_date');
        $user->description = $request->input('description');
        $user->permis = $request->input('permis');
        $user->vehicule = $request->input('vehicule');
        $user->save();
        return view('home');
    }
}
