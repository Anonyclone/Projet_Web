<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressModel extends Model
{
    protected $table = 'addresses';
    public $timestamps = true;

    protected $fillable = [
        'city_name',
        'city_number',
        'street_number',
        'street_name'
    ];

    public function user() {
        return $this->belongsToMany('App\User');
    }
}
