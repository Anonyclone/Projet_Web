<?php

namespace Tartempion\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Tartempion\Http\Requests\UpdateProfilRequest;

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

    public function post(UpdateProfilRequest $request) {

        $avatar = $request->file('avatar');
        $path = config('avatar.path');
        if($avatar->isValid())
            $avatar->storeAs($path, $avatar->getClientOriginalName());

        $user = Auth::user();
        $user->avatar = $avatar->getClientOriginalName();
        $user->sexe = $request->get('sexe');
        $user->surname = $request->input('surname');
        $user->firstname = $request->input('firstname');
        $user->birth_date = $request->input('birth_date');
        $user->phone = $request->input('phone');
        $user->description = $request->input('description');
        $user->permis = $request->input('permis');
        $user->vehicule = $request->input('vehicule');
        $user->save();
        return view('profil', [
           'edit' => false,
           'user' => $user
        ]);
    }
}
