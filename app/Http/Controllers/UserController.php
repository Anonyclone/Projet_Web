<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSearchRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function get() {
        return view('users-search', [
            'users' => []
        ]);
    }

    public function post(UserSearchRequest $request) {
        $users = new User();
        $query = $request->input('search_query');
        return view('users-search', [
           'users' => $users->search('pseudo', $query)
        ]);
    }

    public function getUserProfil($id) {
        return view('user_profil', [
           'user' => User::find($id)
        ]);
    }
}
