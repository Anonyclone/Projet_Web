<?php

namespace App\Http\Controllers;

use App\AddressModel;
use App\Http\Requests\LocationRequest;
use App\LocationModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateProfilRequest;

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

    public function locations() {
        $user = Auth::user();
        $locations_owner = LocationModel::where('user_post_id', '=', $user['id'])->get();
        $locations_customer = LocationModel::where('user_get_id', '=', $user['id'])->get();
        return view('user_locations', [
            'user' => $user,
            'locations_owner' => $locations_owner,
            'locations_customer' => $locations_customer
        ]);
    }

    public function getLocation($id) {
        $association = LocationModel::find($id)->with('userOwner')->with('address')->get();
        $n = Auth::id();
        return view('location_details', [
            'edit' => false,
            'association' => $association[$n-1]
        ]);
    }

    public function editLocation($id) {
        $association = LocationModel::find($id)->with('userOwner')->with('address')->get();
        $n = Auth::id();
        return view('location_details', [
            'edit' => true,
            'association' => $association[$n-1]
        ]);
    }

    public function postLocation($id, LocationRequest $request) {
        $location = LocationModel::find($id);

        $location->title = $request->input('title');
        $location->price = $request->input('price');
        $location->object = $request->get('object');
        $location->date_begin = $request->input('date_begin');
        $location->date_end = $request->input('date_end');
        $location->description = $request->input('description');
        $location->active = true;


        $address = new AddressModel();
        $address->city_name = $request->input('city_name');
        $address->city_number = $request->input('city_number');
        $address->street_number = $request->input('street_number');
        $address->street_name = $request->input('street_name');
        $address->save();

        $location->address()->associate($address);
        $location->save();

        return view('home', [
            'user' => Auth::user()
        ]);
    }

    public function deleteLocation($id) {
        LocationModel::destroy($id);

        return view('home', [
            'user' => Auth::user()
        ]);    }

    public function edit() {
        return view('profil', [
            'edit' => true,
            'user' => Auth::user()
        ]);
    }

    public function post(UpdateProfilRequest $request) {
        $user = Auth::user();
        $avatar = $request->file('avatar');
        $path = config('avatar.path');
        if(!is_null($avatar)) {
            if ($avatar->isValid()) {
                $avatar->storeAs($path, $avatar->getClientOriginalName());
                $user->avatar = $avatar->getClientOriginalName();
            }
        }

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
