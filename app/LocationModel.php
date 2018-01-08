<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    protected $table = 'location';
    public $timestamps = true;

    public function userOwner() {
        return $this->belongsTo('App\User', 'user_post_id');
    }

    public function userCustomer() {
        return $this->belongsTo('App\User', 'user_get_id');
    }

    public function address() {
        return $this->belongsTo('App\AddressModel', 'address_id');
    }
}
