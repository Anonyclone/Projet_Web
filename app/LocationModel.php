<?php

namespace Tartempion;

use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    protected $table = 'location';
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
