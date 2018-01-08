<?php

namespace App\Http\Controllers;

use App\AddressModel;
use App\Http\Requests\LocationRequest;
use App\LocationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get() {
        return view('new_post');
    }

    public function post(LocationRequest $request) {
        $user = Auth::user();
        $location = new LocationModel();

        $location->title = $request->input('title');
        $location->price = $request->input('price');
        $location->object = $request->get('object');
        $location->date_begin = $request->input('date_begin');
        $location->date_end = $request->input('date_end');
        $location->description = $request->input('description');
        $location->active = true;

        $location->userOwner()->associate($user);

        $address = new AddressModel();
        $address->city_name = $request->input('city_name');
        $address->city_number = $request->input('city_number');
        $address->street_number = $request->input('street_number');
        $address->street_name = $request->input('street_name');
        $address->save();

        $location->address()->associate($address);
        $location->save();

        return view('home', [
            'user' => $user
        ]);
    }
}
