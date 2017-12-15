<?php

namespace Tartempion;

use Illuminate\Database\Eloquent\Model;

class AddressModel extends Model
{
    protected $table = 'addresses';
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('Tartempion\User', 'id_user');
    }
}
