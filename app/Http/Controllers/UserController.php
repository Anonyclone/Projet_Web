<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSearchRequest;
use App\LocationModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
           'users' => $users->search('pseudo', $query)->except(Auth::id())
        ]);
    }

    public function getUserProfil($id) {
        $association = User::find($id)->with('locations')->get();
        $posts = LocationModel::where('user_post_id', '=', Auth::id())->get();
        return view('user_profil', [
            'association' => $association[$id-1],
            'posts' => $posts
        ]);
    }

    public function getLocation($id) {
        $association = LocationModel::find($id)->with('userOwner')->with('address')->get();
        $n = Auth::id();
        return view('user_location_details', [
            'association' => $association[$n-1]
        ]);
    }
}
