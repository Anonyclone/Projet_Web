<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchLocationRequest;
use App\LocationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get() {
        return view('search_post', [
            'locations' => []
        ]);
    }

    public function post(SearchLocationRequest $request) {
        $location_model = new LocationModel();
        $locations = $location_model->where('object', 'LIKE', $request->get('object'))
                                    ->where('user_post_id' , '<>', Auth::id())
                                    ->get();

        return view('search_post', [
            'locations' => $locations
        ]);
    }
}
