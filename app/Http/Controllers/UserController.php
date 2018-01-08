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
        $posts = LocationModel::where('user_post_id', '=', $id)->get();
        return view('user_profil', [
            'association' => $association[$id-1],
            'posts' => $posts,
            'user_id' => $id
        ]);
    }

    public function getLocation($id, $user) {
        $association = LocationModel::find($id)->with('userOwner')->with('address')->get();
        return view('user_location_details', [
            'association' => $association[$user-1],
            'user_id' => $user
        ]);
    }

    public function locationWanted($id, $user) {
        $location = LocationModel::find($id);
        $user_customer = Auth::user();
        $location->userCustomer()->associate($user_customer);
        $location->save();

        return view('home', [
            'user' => $user_customer
        ]);
    }

    public function locationUnwanted($id, $user) {
        $location = LocationModel::find($id);
        $user_customer = Auth::user();
        $location->userCustomer()->dissociate();
        $location->save();

        return view('home', [
            'user' => $user_customer
        ]);
    }
}
