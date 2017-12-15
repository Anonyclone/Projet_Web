<?php

namespace Tartempion\Http\Controllers\Auth;

use Tartempion\AddressModel;
use Tartempion\User;
use Tartempion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'surname' => 'between:1,50|required',
            'firstname' => 'between:1,50|required',
            'email' => 'unique:users|email',
            'birth_date' => 'required|date',
            'city_name' => 'required|string',
            'city_number' => 'required|numeric',
            'street_number' => 'required|numeric',
            'street_name' => 'required|string',
            'phone' => 'required|numeric|phone_number|size:11',
            'password' => 'required|between:5,100|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Tartempion\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'surname' => $data['surname'],
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'birth_date' => $data['birth_date'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password'])
        ]);

        $address = Address::create([
            'city_name' => $data['city_name'],
            'city_number' => $data['city_number'],
            'street_number' => $data['street_number'],
            'street_name' => $data['street_name']
        ]);

        return $user->address()->save($address);
    }
}
