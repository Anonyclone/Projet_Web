<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname',
        'firstname',
        'email',
        'birth_date',
        'pseudo',
        'phone',
        'password',
        'avatar',
        'description',
        'permis',
        'vehicule'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function address() {
        return $this->belongsToMany('App\AddressModel');
    }

    public function locations() {
        return $this->hasMany('App\LocationModel');
    }

    public function search($row, $query) {
        return $this->where($row, "LIKE", "%{$query}%")->get();
    }
}
