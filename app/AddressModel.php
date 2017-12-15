<?php

namespace Tartempion;

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
        return $this->belongsTo('Tartempion\User', 'id_user');
    }
}
